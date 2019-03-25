<?php  
    require('config/config.php');
    require('config/db.php');

    // Create Query
    $query = 'SELECT * FROM posts'; 

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
?>
<!DOCYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>