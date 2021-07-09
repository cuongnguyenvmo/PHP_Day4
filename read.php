<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<style>
                body{
                        background-size: cover;
                        background-repeat:no-repeat;
                        background-image: url(https://img.nhandan.com.vn/Files/Images/2020/07/26/nhat_cay-1595747664059.jpg)
                }
            </style>
    <div class="container">

    <h4 class="display-4 text-center">READ</h4><br>
    <br />
    <br />
    <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success'] ?>
        </div>
        <?php } ?>
    <?php 
        if(mysqli_num_rows($result)){ ?>
    <div class="box">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Tùy Chọn</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $i = 0;
            while($rows = mysqli_fetch_assoc($result)){
                $i++; ?>
            <tr>
            <th scope="row"><?=$i?></th>
            <td><?php echo $rows['user']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td>   <a href="update.php?id=<?=$rows['id']?>"
                   class="btn btn-success">Update</a>
                   <a href="php/delete.php?id=<?=$rows['id']?>"
                   onclick="return confirm('Bạn có chắc muốn xóa ko?');"
                   class="btn btn-danger">Delete</a></td>
                   </td>
                
            </tr>
            <?php } ?>
        </tbody>
        </table>
        <?php } ?>
            <div class="link-right">
                <a href="index.php" 
                class="btn btn-primary active" aria-current="page"
                >Create</a>
                <a href="php/search.php" 
                class="btn btn-primary active" aria-current="page"
                >Search</a>
            </div>
        </div>
</div>
</body>
</html>
