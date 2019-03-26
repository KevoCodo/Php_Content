<?php  
    require('config/config.php');
    require('config/db.php');
    
    //Check for submit
    if(isset($_POST['submit'])){
        // Get form data
<<<<<<< HEAD
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
=======
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

<<<<<<< HEAD
        $query = "UPDATE posts SET
            title = '$title',
            author = '$author',
            body = '$body'
                WHERE id = {$update_id}";
       // Use die method to stop functions from executing
       // die($query);
=======
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51
        
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
<<<<<<< HEAD
    <div class="container py-3">
    <a href="<?php echo ROOT_URL; ?>" class='btn btn-outline-dark mb-3'>&lsaquo;</a>

    <h1>Edit Posts</h1>
        <form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value='<?php echo $post['title']; ?>'>
                </div>

                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="author" class="form-control" value='<?php echo $post['author']; ?>'>
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" cols="30" rows="10" class='form-control'><?php echo $post['body']; ?></textarea>
                </div>
                <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="submit" value='Submit' class='btn btn-primary'>
            </form>
    </div>
=======
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
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51
<?php include('inc/footer.php'); ?>