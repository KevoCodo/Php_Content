<?php
    //Message Vars
    $msg = '';
    $msgClass = '';

    //Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //Passed
            //Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //Failed
                $msg = 'Please use a valid email address';
                $msgClass = 'alert-danger';
            }else{
                //Passed
                // Recipient Email
                $toEmail = ini_set('kevthedev00@gmail.com', 25);
                //Subject
                $subject = 'Contact request from '.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';

                //Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8". "\r\n";

                //Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //Email Sent
                    $msg = 'Email sent';
                    $msgClass = 'alert-success';
            }else{
                //Failed
                $msg = 'Email not sent';
                $msgClass = 'alert-danger';
        }
    }
}else{
            //Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="">
            <div class="navbar-header">
                <a class="navbar-brand mb-0 h1" href='index.php'>Contact Form</span>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
        <?php endif; ?>
        <!--Form Start-->
        <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name='name' class="form-control" placeholder="Enter Full Name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name='email' class="form-control" placeholder="Enter Email Address" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class='form-control'><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
            </div>
            <br/>
            <button type="submit" name='submit' class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>