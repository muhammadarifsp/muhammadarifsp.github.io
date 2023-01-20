<?php 
    $type = [
        "register",
        "novel"
    ];
    
    if($database == $type[0]){
        $conn = mysqli_connect('localhost','root','','register');

        if (!$conn) {
            echo "database connection failed";
        }

        function cek($username, $email){
            global $conn;
            $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($result);

            if($check > 0){
                return true;
            }else {
                return false;
            } 
        }
    }elseif ($database == $type[1]) {
        $conn = mysqli_connect('localhost','root','','novel');
        if (!$conn) {
            echo "database connection failed";
        }

    }
    
?>