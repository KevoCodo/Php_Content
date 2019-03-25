<<<<<<< HEAD
<?php
if (isset($_POST['submit'])){
    session_start();
    
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
  
    header('Location: page2.php');
  }
=======
<?php 
if(isset($_POST['submit'])){
    echo '123';
    /*session_start(); //Start Session

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');*/
}
>>>>>>> d84f168539ffff15724339f67d2515b6867cd331
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
<<<<<<< HEAD
  <form method='post' action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="email" class="form-control" name='email' placeholder="Enter Email Address">
    </div><br/><br/>
    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
  </form>
=======
<form method='post' action="<?php $_SERVER['PHP_SELF'] ?>">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name='email' placeholder="Enter Email Address">
  </div><br/><br/>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
>>>>>>> d84f168539ffff15724339f67d2515b6867cd331
</body>
</html>