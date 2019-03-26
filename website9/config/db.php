<?php
//Create Connection
<<<<<<< HEAD
    $conn = mysqli_connect(DB_HOST, DB_USER, '', DB_NAME);
=======
    $conn = mysqli_connect('localhost', 'root', '', 'php_blog');
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51

    //Check Connection
    if(mysqli_connect_errno()){
        //Connection Failed
        echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }


?>