<?php
<<<<<<< HEAD
    require('config/config.php');
    require('config/db.php');
=======
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51

    //Check for submit
    if(isset($_POST['submit'])){
        // Get form data
<<<<<<< HEAD
        $title = mysqli_real_escape_string($_POST['title'], $conn);
        $body = mysqli_real_escape_string($_POST['body'], $conn);
        $author = mysqli_real_escape_string($_POST['author'], $conn);
=======
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
        
        if(mysqli_query($conn, $query)){
<<<<<<< HEAD
            header('Location: '.ROOT_URL. '');
        }else {
            echo 'ERROR: '. mysqli_error($conn);
        }
=======
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'ERROR: '.mysqli_error($conn);
        }
    
>>>>>>> 2b6591112cf599e53237bea7ffccc0a4d54b2f51
    }
?>

<?php include('inc/header.php'); ?>
<div class="container">
    <a href="<?php echo ROOT_URL; ?>" class='btn btn-outline-dark my-3'>&lsaquo;</a>

    <h1>Add Post</h1>
    <form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea name="body" cols="30" rows="10" class='form-control'></textarea>
        </div>
        <input type="submit" name="submit" value='Submit' class='btn btn-primary'>
    </form>
</div>
<?php include('inc/footer.php'); ?>