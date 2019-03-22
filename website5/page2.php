<?php
    //update cookie
    setcookie('username', 'Kev', time() + (86400 * 30));

    //delete cookie
    //setcookie('username', 'Kev', time() - 3600);

    if(count($_COOKIE) > 0){
        echo 'There are ' . count($_COOKIE) . ' cookies saved <br/>';
    }else{
        echo 'There are no cookies saved.';
    }

    if (isset($_COOKIE['username'])){
        echo 'User ' . $_COOKIE['username'] . ' is set <br/>';
    }else{
        echo 'User is not set';
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
    
</body>
</html>