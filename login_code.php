<?php 
    $database = "register";
    require_once('db.php');
    $error_msg = "";
    $level = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $md5_pass = $_POST['password'];
        $password = md5($md5_pass);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $sql_pass = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $result_pass = mysqli_query($conn, $sql_pass) or die(mysqli_error($conn));
        
        // cek level admin atau user
        

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row["username"];
                $level = $row['level'];
                session_start();
                $_SESSION['username'] = $username; 
            }
            if ($level == "admin") {
                header("location: admin.php");
            }else {
                header("location: index.php");
            }
        }elseif (mysqli_num_rows($result_pass) > 0) {
            echo '<script>alert("Password salah")</script>';
        }else {
            echo '<script>alert("Username tidak ditemukan")</script>';
            
        }
    }
    
    

?>