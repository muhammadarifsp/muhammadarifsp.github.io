<?php 
    $database = "register";
    require_once('db.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $md5_pass = $_POST['password'];
        $password = md5($md5_pass);

        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($conn, $sql_u) or die(mysqli_error($conn));
        $res_e = mysqli_query($conn, $sql_e) or die(mysqli_error($conn));
        
        if(mysqli_num_rows($res_u) > 0){
            echo "Username telah diambil, Silahkan gunakan yang lain";
        }elseif (mysqli_num_rows($res_e) > 0) {
            echo "Email telah diambil, Silahkan gunakan yang lain";
        }else {
            $sql = "INSERT INTO users (username, email, password, level) VALUES ('$username','$email','$password', 'user')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location: login.php");
            }else {
                echo "Error :".$sql;
        }
        }

    }






?>