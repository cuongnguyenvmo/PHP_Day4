<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form action="php/update.php"
          method="post">
        <h4 class="display-4 text-center">Update</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error'] ?>
        </div>
        <?php } ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="name" 
                class="form-control" 
                id="name" 
                name="name"
                value="<?php echo $row['user']  ?>" 
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Email :</label>
        <input type="email" 
                class="form-control" 
                id="email"
                name="email"
                value="<?php echo $row['email']  ?>" 
    </div>
    <input type="text"
           name="id"
           value="<?php echo $row['id'] ?>"
           hidden>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
    <a href="read.php" class="link-primary">View</a>
    </div> 
</form>
</body>
</html>
