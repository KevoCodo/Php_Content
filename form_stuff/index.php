<?php 
    /*
    //Check for posted data
    if(filter_has_var(INPUT_POST,  'data')){
        echo 'Data Found';
    }else{
        echo 'No Data';
    }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        //Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email is valid';
    }else{
        echo 'Email is NOT valid';
    }

    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_URL

    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

    $var = 'time';
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number';
    }else{
        echo $var. ' is not a number';
    }

    $var = '<script>alert(1)</script>';
    //var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
    //echo $var;
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    

    $filters = array(
        'data' => FILTER_VALIDATE_EMAIL,
        'data2' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 100
            )
        )
    );
    print_r(filter_input_array(INPUT_POST, $filters));
    */

    $arr = array(
        'name'=> 'kevin',
        'age'=> 200,
        'email'=> 'kev@gmail.com'
    );

    $filters = array(
        'name' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'ucwords'
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 120
            )
        ),
        'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms - Filters/Validations</title>
    <style>
    body{
        background: grey;
        font-size: 20px;
        font-family: helvetica;
    }
    .submit:hover{opacity: 0.8;}
    </style>
</head>
<body>
    <h1>PHP Form</h1>

    <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>" style='max-width:100%; display:flex; justify-content: center; padding-top: 100px;'>
    <fieldset style='padding-left:50px; padding:40px; background: lightblue;'>
    <legend>Enter Your Information</legend>
    <label>Email:</label>
    <input type="text" name="data" placeholder='Enter Email Address'>
    <br/><br/>
    <label>Name:</label>
    <input type="text" name="data2" placeholder='Enter Name'>
    <br/><br/>
    <input type="submit" value="Submit" style='background: green;' class='submit'>
    </fieldset>
    </form>
</body>
</html>