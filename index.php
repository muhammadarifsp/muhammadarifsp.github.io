<?php
    $title = "ONscript - Free Reading Site";
    require_once('views/header.php');
?>


<body>
    <section id="header">
        <div class="container">
            <a href="#header"><img src="images/logo.png" class="logo"></a>
            <div class="header-text">
                <h1>ONscript</h1>
                <p>Free Reading Site</p>
                <span class="square"></span><br>
                <?php if (empty($_SESSION['username'])) : ?>
                    <button class="common-btn" onclick="window.location.href='login.php';">Login</button>
                    <button class="common-btn" onclick="window.location.href='register.php';">Register</button>
                <?php else : ?>
                    <button class="common-btn" onclick="window.location.href='reading.php';">Reading</button>
                    <button class="common-btn" onclick="window.location.href='writing.php';">Writing</button>
                <?php endif; ?>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('views/sideNav.php'); ?>

    <!-- about -->
    <section id="about">
        <div class="about-left-col">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>ONscript</h1>
                <span class="square"></span>
                <p>Isi tentang penjelasan singkat tentang website ini atau fakta-fakta tentang website ini.</p><br><br>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
                <h2>"Learning is not attained by chance, it must be sought for with ardor and attended to with diligence</h2>
                <h3>----Abigail Adams</h3>
            </div>
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

    <?php if (empty($_SESSION['username'])) : ?>
    <!-- Reading -->
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Reading </h1>
                    <span class="square"></span>
                    <p>UNESCO menyebutkan Indonesia berada di urutan kedua dari bawah soal literasi dunia, artinya minat baca sangat rendah. Menurut data UNESCO, minat baca masyarakat Indonesia sangat memprihatinkan, hanya 0,001%. Artinya, dari 1,000 orang Indonesia, cuma 1 orang yang rajin membaca.</p>
                    <button class="common-btn" onclick="window.location.href='login.php';">Start Reading</button>
                    <div class="line">
                        <span class="line-1"></span><br>
                        <span class="line-2"></span><br>
                        <span class="line-3"></span>
                    </div>
                </div>
            </div>
            <div class="course-right-col">
            </div>
        </div>
    </section>

    <!-- Writing -->
    <section id="offer">
        <div class="about-left-col">
            <img src="images/offer.png">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>Writing</h1>
                <span class="square"></span>
                <p>Isi Apa kek</p>
                <button class="common-btn" onclick="window.location.href='login.php';">Start Writing</button>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>

            </div>
        </div>
    </section>

    <!-- Join -->
    <section id="contact">
        <div class="container contact-row">
            <div class="contact-left-col">
                <h1>Write Your Story<br><small>Sign Up Now!</small></h1>
                <form action="">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <input type="password" placeholder="Enter Password">
                    <div class="btn-box">
                        <button class="common-btn">Sign up</button>
                    </div>
                </form>
                <p>Sudah memiliki akun? <a href="login.php"><strong>Login</strong></a></p>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
            <div class="contact-right-col">
                <img src="images/contact.png">
            </div>
        </div>
    </section>
    <?php
        endif;
        require_once('views/footer.php');
    ?>

    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        // menuBtn.onclick = function(){
        //     if (sideNav.style.right == "-250px") {
        //         sideNav.style.right = "0";
        //     }else{
        //         sideNav.style.right = "-250px";
        //     }
        // }

        document.onclick = function(hide){
            if (hide.target.id === "menuBtn" || hide.target.id === "sub-sideNav"){
                sideNav.style.right = "0";
                menuBtn.style.right = "-150px";
            } else if (hide.target.id !== "sideNav") {
                sideNav.style.right = "-250px";
                menuBtn.style.right = "65px";
            }
        }


        var scroll = new SmoothScroll('a[href*="#"]',{
            speed: 500,
            sppedAsDuration: true
        });

    </script>
</body>
</html>
