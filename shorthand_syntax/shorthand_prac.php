<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    $list = array('first','second','third');

    foreach($list as $x): ?>
        <strong><?php echo $x ?></strong> 
<?php endforeach
    ?>
</body>
</html>