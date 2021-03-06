<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8210b99a89.js" crossorigin="anonymous"></script>
    <title>Mail Us</title>
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
                   <a href="index.php">home</a>
               </li>
               <li>
                   <a href="services.php">services</a>
               </li>
               <li>
                   <a href="about.php">about</a>
               </li>
               <li class="active">
                   <a href="mail.php">mail us</a>
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
                    <span>SERVICES</span>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------->

    <!--MAIL-------------------------------------------->
    <section class="mail">
        <div class="container border-header">
            <div class="header">
                <h2 class="title">MAIL us</h2>
                <p class="desc text-orange">How To Find Us</p>
            </div>

            <!--MAP-->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.0007257884545!2d30.335455051387093!3d53.89619104098629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d051ef0fbfb7d1%3A0xc9a08e0f963ec8c2!2z0KHQvtGG0LjQsNC70YzQvdC-LdCz0YPQvNCw0L3QuNGC0LDRgNC90YvQuSDQutC-0LvQu9C10LTQtiDQo9CeICLQnNC-0LPQuNC70LXQstGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC40LzQtdC90Lgg0JAu0JAuINCa0YPQu9C10YjQvtCy0LAi!5e0!3m2!1sru!2sby!4v1605392743472!5m2!1sru!2sby" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>

            <!--CONTACT-->
            <div class="contact">
                <div class="left">
                    <h2 class="title">Address</h2>
                    <p class="desc">
                        Est eligendi optio cumque nihil impedit quo minus id quod maxime 
                        <span>26 56D Rescue,US</span>
                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <p class="text"> Free Phone :+(010) 012 345 211</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-folder-open"></i>
                            </div>
                            <p class="text"> Fax :+1 078 4589 2456</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p class="text">
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <h4 class="title">Contact Form</h4>
                    <form action="" method="POST">
                        <input type="text" placeholder="Name*" class="p10 w50"  required>
                        <input type="phone" placeholder="Telephone*" required class="p10 w50">
                        <input type="email" placeholder="Email*" class="p10 w50" required>
                        <input type="text" placeholder="Subject*" class="p10 w50" required>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message..." class="p10"></textarea>
                        <div class="buttons">
                            <input type="submit" value="SUBMIT" class="btn">
                            <input type="reset" value="CLEAR" class="btn">
                        </div>
                    </form>
                </div>
            </div>
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