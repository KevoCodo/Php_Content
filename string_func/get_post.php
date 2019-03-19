<?php 
    /*
    if(isset($_GET['name'])){
        //print_r($_GET);
        $name = htmlentities($_GET['name']);
        echo $name;
    }
    
    if(isset($POST['name'])){
        //print_r($_GET);
       //$name = htmlentities($_POST['name']);
        //echo $name;
    }

    if(isset($REQUEST['name'])){
        //print_r($_REQUEST);
        //$name = htmlentities($_REQUEST['name']);
        //echo $name;
    }*/

    //echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Samples - Get/Posts</title>

</head>
<body>
    <h2>HTML Forms</h2>

        <form method='GET' action="get_post.php">
        First name:<br>
        <input type="text" name="name">
        <br><br>
        <input type="email" name="email">
        <br><br>
        <input type="submit" value="Submit">
        </form> 

        <ul>
            <li>
                <a href="get_post.php?name=Kevin">Kevin</a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="get_post.php?name=Ben">Ben</a>
            </li>
        </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
    <h1><?php 
        $name = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias ipsum temporibus alias, iste illo repellendus autem iure dolorum odio placeat incidunt necessitatibus natus reiciendis ipsa expedita dignissimos aperiam nulla ipsam.';
        $compressed =  gzcompress( $name );
        echo gzuncompress($compressed);
    ?>
    </h1>
</body>
</html>