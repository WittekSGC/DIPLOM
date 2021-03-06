<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8210b99a89.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>

    <!--CONTACTS-->
    <header class="contacts center">
        <div class="container">
            <div class="item-left">
                <div class="phone block">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <span class="title">+ (123) 111 222 333</span>
                </div>
                <div class="email block">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <a href="#">
                        <span class="title">info@example.com</span>
                    </a>
                </div>
                <div class="search icon">
                    <i class="fas fa-search"></i>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search Here">
                    <button>Send</button>
                    <div class="close">
                        <img src="img/close.png" alt="">
                    </div>
                </div>
            </div>
            <div class="item-right">
                <a href="login.php">
                    <div class="login button">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="title">Log In</span>
                    </div>
                </a>
                <a href="signup.php">
                    <div class="signup button">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="title">Sign Up</span>
                    </div>
                </a>
            </div>
        </div>
    </header>
    <!-------------------------------------------------->

    <!--NAV BAR-->
    <section class="nav-bar center">
        <div class="container">
            <div class="logo">
                <img src="img/Logo-WB.png" alt="">
            </div>
            <ul class="links">
                <li>
                    <a href="../index.html">home</a>
                </li>
                <li>
                    <a href="services.html">services</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="">short codes</a>
                </li>
                <li>
                    <a href="mail.html">mail us</a>
                </li>
            </ul>
            <div class="toggle-button">
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------->

    <!--GREATHER PHOTO-->
    <section class="gphoto">
        <img src="img/12.jpg" alt="">
    </section>
    <!-------------------------------------------------->

    <!--NAV LINKS-->
    <section class="nav-links">
        <div class="container">
            <div class="links">
                <div class="link">
                    <a href="">
                        <span class="text-orange">HOME</span>
                    </a>
                </div>
                <div class="link last">
                    <span>Login</span>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------->

    <!--******------------------------------------------>
    <section class="login">
        <div class="container border-header">
            <div class="header">
                <h2 class="title">Login</h2>
                <p class="desc text-orange">Welcome to our Truckage.</p>
            </div>
            <form action="" class="loginForm" method="POST">
                <input type="text" class="user p10" placeholder="User Name">
                <input type="password" class="pass p10" placeholder="********">
                <p class="line-box">
                    <span class="check-box">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember me</label>
                    </span>
                    <a href="">Forgot Password?</a>
                </p>
                <input type="button" class="btn" value="Login">
            </form>
        </div>
    </section>
    <!-------------------------------------------------->

    <!--FOOTER------------------------------------------>
    <footer>
        <div class="container">
            <div class="item about w25">
                <h4 class="title">About us</h4>
                <div class="white-logo">
                    <img src="img/Logo-BB.png" alt="">
                </div>
                <p class="text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
            </div>
            <div class="item links w15">
                <h4 class="title">Links</h4>
                <div class="list">
                    <div class="list-item">
                        <a href="index.php"><span>Home</span></a>
                    </div>
                    <div class="list-item">
                        <a href="services.php"><span>Services</span></a>
                    </div>
                    <div class="list-item">
                        <a href="about.php"><span>About</span></a>
                    </div>
                    <div class="list-item">
                        <a href="mail.php"><span>Mail Us</span></a>
                    </div>
                </div>
            </div>
            <div class="item twit w30">
                <h4 class="title">Twitter Post</h4>
                <div class="list">
                    <div class="list-item">
                        <div class="text">
                            Ut aut reiciendis voluptatibus maiores alias, ut aut reiciendis.
                        </div>
                        <div class="info">
                            <img src="img/twitter.png" alt="" class="twit-logo">
                            <p class="date">02 days ago</p>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="text">
                            Ut aut reiciendis voluptatibus maiores alias, ut aut reiciendis.
                        </div>
                        <div class="info">
                            <img src="img/twitter.png" alt="" class="twit-logo">
                            <p class="date">02 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item inst w30">
                <h4 class="title">Instagram</h4>
                <div class="images">
                    <div class="image">
                        <a href="">
                            <img src="img/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="image">
                        <a href="">
                            <img src="img/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="image">
                        <a href="">
                            <img src="img/8.jpg" alt="">
                        </a>
                    </div>
                    <div class="image">
                        <a href="">
                            <img src="img/9.jpg" alt="">
                        </a>
                    </div>
                    <div class="image">
                        <a href="">
                            <img src="img/10.jpg" alt="">
                        </a>
                    </div>
                    <div class="image">
                        <a href="">
                            <img src="img/11.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-------------------------------------------------->

    <!--COPYRIGHT--------------------------------------->
    <section class="copy">
        <div class="container">
            <div class="copy-info">
                <p class="text">
                    © 2017 Truckage. All rights reserved | Created by
                    <a href="https://vk.com/wittek_1302"> Wittek</a>
                </p>
            </div>
            <div class="share">
                <div class="social">
                    <a href="">
                        <img src="img/facebook.png" alt="">
                    </a>
                </div>
                <div class="social">
                    <a href="">
                        <img src="img/instagram.png" alt="">
                    </a>
                </div>
                <div class="social">
                    <a href="">
                        <img src="img/twitter-white.png" alt="">
                    </a>
                </div>
                <div class="social">
                    <a href="">
                        <img src="img/pinterest.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------->
</body>

</html>