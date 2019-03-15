<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class='bg-warning'>
    <div class="container">
      <h1 class='pb-4'>Server and File Info</h1>
      <?php if($server): ?>
        <ul>
            <?php foreach($server as $key => $value): ?>
            <li class="list-group-item">
                <strong> <?php echo $key; ?> </strong>
                <?php echo $value; ?>
            </li> 
<?php endforeach; ?>
        </ul>
<?php endif; ?>
    </div>

<div class="container">
    <h1 class='py-4'>Client and File Info</h1>
    <?php if($client): ?>
    <ul>
        <?php foreach($client as $key => $value): ?>
        <li class="list-group-item">
            <strong> <?php echo $key; ?> </strong>
            <?php echo $value; ?>
        </li> 
<?php endforeach; ?>
        </ul>
<?php endif; ?>
    </div>

</body>
</html>