<?php
    if (isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        //1 hour
        header('Location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookies</title>
</head>
<body>
<form method='post' action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" name="username" placeholder="Enter Name">
    </div><br/><br/>
    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
  </form>
</body>
</html>