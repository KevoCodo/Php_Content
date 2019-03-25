<?php
    //Check for submit
    if(isset($_POST['submit'])){
        // Get form data
        $title = mysqli_real_escape_string($_POST['title']);
        $body = mysqli_real_escape_string($_POST['body']);
        $author = mysqli_real_escape_string($_POST['author']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
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