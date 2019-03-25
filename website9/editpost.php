<?php  
    require('config/config.php');
    require('config/db.php');
    
    //Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
        
        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'ERROR: '.mysqli_error($conn);
        }
    
    }

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

<?php include('inc/header.php'); ?>
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
<?php include('inc/footer.php'); ?>