<?php
    require_once('views/header.php');
?>


<?php if (!empty($_SESSION['username'])) : ?>
    <div class="dropdown">
        <button class="drop-btn" ><?php echo $_SESSION['username']; ?></button>
        <div class="dropdown-content">
            <a href="#">My Profile</a>
            <a href="#">My Library</a>
            <a href="#">FAQ</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
<?php else : ?>
    <nav id="sideNav">
        <ul id="sub-sideNav">
            <li id="sub-sideNav"><a href="#header">HOME</a></li>
            <li id="sub-sideNav"><a href="#about">ABOUT</a></li>
            <li id="sub-sideNav"><a href="#features">CATEGORY</a></li>
            <li id="sub-sideNav"><a href="#courses">READING</a></li>
            <li id="sub-sideNav"><a href="#offer">WRITING</a></li>
            <li id="sub-sideNav"><a href="#contact">SIGN UP</a></li>
        </ul>
    </nav>

    <img src="images/menu.png" id="menuBtn">
<?php endif; ?>
