<?php 
    $title = "Reading - ONscript";
    require_once("views/header.php");
?>


<body>
    <div class="container">
        <a href="index.php"><img src="images/logo.png" class="logo"></a>
        
        <!-- Newest Upload -->
        <section id="features">
            <h1>Newest Upload</h1>
            <div class="feature-row">
                <ul>
                    <li><a href="#"></a></li>
                </ul>
                <button class="common-btn">View More</button>
            </div>
        </section>

        <!-- Category -->
        <section id="features">
            <h1>Category</h1>
            <div class="feature-row">
                <div class="feature-col">
                    <img src="images/fantasy.png" alt="">
                    <h4>Fantasy</h4>
                    <p>Switch berween your computer, tablet or mobile device</p>
                </div>
                <div class="feature-col">
                    <img src="images/mistery.png" alt="">
                    <h4>Mistery</h4>
                    <p>Learn from industry experts who are passionate about teaching.</p>
                </div>
                <div class="feature-col">
                    <img src="images/scifi.png" alt="">
                    <h4>Sci-fi</h4>
                    <p>Choose what you'd like to leard from our extensive subscription library</p>
                </div>
            </div>
            <div class="feature-btn">
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
                <button class="common-btn">View More</button>
            </div>
        </section>
    </div>

    <?php require_once('views/footer.php') ?>
</body>

</html>