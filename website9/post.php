<?php  
    require('config/config.php');
    require('config/db.php');

    //Get Id
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = 'SELECT * FROM posts WHERE id = '.$id; 

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
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
    <title>PHP Blog - <?php echo $post['title'] ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <a href="<?php echo ROOT_URL; ?>" class='btn btn-outline-dark mt-3'>&lsaquo;</a>
    <h1 class='py-5'><?php echo $post['title']; ?></h1>
 
        <small class='text-muted'>Created on <?php echo $post['created_at']; ?>
            <?php echo $post['author']; ?>
        </small>
        <h5><?php echo $post['body'] ?></h5>
        <hr>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class='btn btn-outline-dark'>Edit</a>
</div>

<footer class='bg-info pt-0 pb-5'>
    <div class="container pt-5">
        <div class="row">
            <div class='col'>
                <h4>&copy; 2019 Kodegistics</h4>
            </div>

            <div class='col'>
                <h4>Powered By: PHP5</h4>
            </div>

        </div>
    </div>
</footer>
</body>
</html>