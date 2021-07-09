<?php include '../db_conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    
        <div class="container">
        <div>
        <a href="/crud/read.php" 
                class="btn btn-primary active" aria-current="page"
                >Back to Read</a> <br/> <br/>
                </div>
    <div align="center" class="">
            <form action="search.php" method="get">
                Nhập tên muốn tìm: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php 
                    if (isset($_REQUEST['ok'])) {
                        $search = addslashes($_GET['search']);
                        if (empty($search)) {
                            echo "Hãy nhập thông tin muốn tìm kiếm !";
                        } else {
                            
                            $query = "SELECT * FROM users WHERE user like '%$search%'";
                           
                            $sql = mysqli_query($conn, $query);
        
                            $num = mysqli_num_rows($sql);
             
                            if ($num > 0 && $search != "") 
                            {
        
                                echo '<table border="1" cellspacing="0" cellpadding="10">';
                                while ($row = mysqli_fetch_assoc($sql)) {
                                    echo '<tr>';
                                        echo "<td>{$row['user']}</td>";
                                        echo "<td>{$row['email']}</td>";
                                    echo '</tr>';
                                }
                                echo '</table>';
                            } 
                            else {
                                echo "Không tìm thấy kết quả!";
                            }
                        }
                    }
        ?>
        </div>
</body>
</html>