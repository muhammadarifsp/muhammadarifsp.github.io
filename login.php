<?php 
    include('login_code.php'); 
    $title = "Login - ONscript";
    require_once('views/header.php');
?>

<body>
    <section id="header">
        <div class="container">
            <a href="index.php"><img src="images/logo.png" class="logo"></a>
            <div class="header-text">

                <form action="login.php" class="input-group" method="post">
                    <h1 class="header-form">Login</h2>
                    <input type="text" class="input-field" placeholder="username" name="username" required> 
                    <input type="password" class="input-field" placeholder="password" name="password" required>
                    <input type="checkbox" class="check-box" ><span>Remember password</span>    
                    <button type="submit" class="common-btn">Login</button>
                    <p>Belum memiliki akun? <a href="register.php"><strong>Register</strong></a><p> 
                </form>

            </div>
        </div>
    </section>

    <?php require_once('views/footer.php') ?>
</body>
</html>