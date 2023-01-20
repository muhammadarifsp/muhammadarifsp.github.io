<?php 
    include('regis_code.php');
    $title = "Register - ONscript";
    require_once('views/header.php'); 

?>

<body>
    <section id="header">
        <div class="container">
            <a href="index.php"><img src="images/logo.png" class="logo"></a>
            <div class="header-text">
                <form action="register.php" class="input-group" method="post">
                    <h2 class="header-form">Register</h2>
                    <input type="text" class="input-field" placeholder="username" name="username" required> 
                    <input type="email" class="input-field" placeholder="email" name="email" required>
                    <input type="password" class="input-field" placeholder="password" name="password" required>
                    <input type="password" class="input-field" placeholder="konfirmasi password" name="kpassword" required>
                    <div class="check-box">
                        <input type="checkbox" required>
                        <span>i agree to the terms & conditions</span></div>
                    <button type="submit" class="common-btn">Register</button>
                    <p>Sudah memiliki akun? <a href="login.php"><strong>Login</strong></a><p>  
                </form>

            </div>
        </div>
    </section>

    <?php require_once('views/footer.php') ?>
</body>
</html>