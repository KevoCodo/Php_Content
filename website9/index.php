<?php include('inc/header.php'); ?>
<div class="container">
    <h1 class='py-5'>Kodegistics Blog Posts</h1>
    <?php foreach ($posts as $post) :?>
    <div class='jumbotron bg-secondary p-4'>
    <h3 class='text-info' style='text-transform: capitalize;'><?php echo $post['title']; ?></h3>
    <small class='text-muted'>Created on <?php echo $post['created_at']; ?>
        <?php echo $post['author']; ?>
    </small>
    <h5><?php echo $post['body'] ?></h5>
    <a class='btn btn-outline-dark' href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
    </div>
    <?php endforeach?>
</div>
<?php include('inc/footer.php'); ?>