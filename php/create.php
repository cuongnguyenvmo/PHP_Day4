<?php 
    if(isset($_POST['create'])){
        include "../db_conn.php";
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        } 
    }
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $user_data = 'name . $name'. '&email . $email';
        if (empty($name)){
            header("Location:../index.php?error= Hãy nhập tên&$user_data");
        }elseif (empty($email)){
            header("Location:../index.php?error= Hãy nhập email&$user_data");
        }else {
            $sql = "INSERT INTO users (user,email) VALUES('$name','$email')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header("Location:../read.php?success=successfully created");
            }else{
                header("Location:../index.php?error=unknow error occurred&$user_data");
            }
        }
        ?>