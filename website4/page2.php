<?php
    session_start();
<<<<<<< HEAD
    
    $name = $_SESSION['name']    
=======

    $name = $_SESSION['name'];
>>>>>>> d84f168539ffff15724339f67d2515b6867cd331
    $email = $_SESSION['email'];
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
    <h5>Thank you <?php echo $name; ?>, you have subscribed with the email <?php echo $email; ?>.</h5>
    <a href="page3.php">Go To Page 3</a>
=======
    <h5>Thank you <?php echo $name; ?> you have subscribed with the email <?php echo $email; ?></h5>
>>>>>>> d84f168539ffff15724339f67d2515b6867cd331
</body>
</html>