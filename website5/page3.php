<?php
    $user = ['name' => 'Kevin', 'email' => 'test@test.com', 'age' => 33];

    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);

    echo $user['email'];
?>