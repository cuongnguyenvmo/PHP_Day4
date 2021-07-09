<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container">
    <div id ="row">      
        <div id="background" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <style>
                body{
                        background-size: cover;
                        background-repeat: repeat;
                        background-image: url(https://aphoto.vn/wp-content/uploads/2018/02/anh-chup-dien-thoai-dep-1.jpg);

                }
            </style>
         </div> 
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <form action="php/create.php"
                method="post">
                <h4 class="display-4 text-center">CREATE</h4><hr><br>
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
                        placeholder="Enter your name...">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email :</label>
                <input type="email" 
                        class="form-control" 
                        id="email"
                        name="email" 
                        placeholder="Enter your email...">
            </div>
            <button type="submit" class="btn btn-primary" name="create">Create</button>
            <a href="read.php" class="btn btn-primary active" aria-current="page">View</a>
            </form>
            </div>
    </div>    
    
</div> 
</body>
</html>