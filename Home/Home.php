<?php
	include "../config/config.php";
	include "../config/core.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="HomeCSS.css">
    <title>Capture Dream</title>
</head>

<body>

    <!---------------------------Navbar--------------------------->

    <nav>

        <div class="menuToggle " onclick="toggleMenu();">
        </div>

        <ul class="navigationL">
            <li><a  href="../Home/Home.php">Home</a></li>
            <li><a  href="../Photographers/Photographers.php">Photographers</a></li>
            <li><a  href="../CD Story/Story.php">About Us</a></li>
            <li><a href="../Contact Us/Contact Us.php">Contact Us</a></li>

            <?php
                if(isset($_SESSION['photog_id'])){
            ?>
            <li><a href="../Contact Us/Contact Us.php">Photographer Account</a></li>
            <?php
                }
            ?>
        
        </ul>
        
        <?php
                if(!isset($_SESSION['user_id'])){
        ?>
        <ul class="navigation-R">
          <li><a  href="../Login/Login.php">Login</a></li>
            <li><a href="../Sign Up Page/SignUp.php">Sign Up</a></li>
			</ul>

            <?php
                }
                else{
            ?>
        <ul class="navigation-R">
          <li><a  href="../userForm/userForm.php">Account</a></li>
            <li><a href="../Home/logout.php">Logout</a></li>
			</ul>
            <?php
                }
            ?>
   
    </nav>
    <div class="logo_searchBar">
        <div class="search-container"><input type="text" placeholder="search photographer" class="search "></div>
            <div class="col-lg-6 ">
                 <a href=""><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------end Navbar--------------------------->
  
    
    <!---------------------------slideShow--------------------------->
    <section id="home">
        <div id="slider" class="slider">    
        <center>
            <div class="principal">
                <h1>capture<span>D</span>ream</h1>
                <p>
              
               

<?php
echo readfile("fileName1.txt");
?>


                   
                </p>
            </div>
        </center>
        </div>
    </section>
    
    <!---------------------------end slideShow--------------------------->

    <!---------------------------treanding_Photographers--------------------------->

    <section class="TRNDphotographers">
        <div class="treanding_Photographers">
            
            <div class="title">
                <h2>Treanding Photographers</h2>
            </div>
            
            <div class="content">
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/kasun.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Kasun Perera</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/2.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Aathif</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/4.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Akmal</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/3.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Umesh</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/1.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Ramindu</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img src="../images/photographers/5.jpg" alt="">
                    </div>
                    <div class="name">
                        <h3>Rusha</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <!---------------------------end treanding_Photographers--------------------------->

    <!---------------------------footer--------------------------->

    <div class="footer">
        <div class="grid-container">
            <div class="grid-item">
                <div class="footer-col-1">
                    <h3>Quick Links</h3>
            <ul class="navigationL">
            <li><a  href="../Home/Home.php">Home</a></li>
            <li><a  href="../Photographers/Photographers.php">Photographers</a></li>
            <li><a  href="../CD Story/Story.php">About Us</a></li>
            <li><a href="../Contact Us/Contact Us.php">Contact Us</a></li>
            </ul>
                </div>
            </div>

            <div class="grid-item">
                <div class="footer-col-2">
                    <h3>Legal</h3>
                    <ul class="Qlinks">
                        <li><a href="#">Privacy Policy</a></li>

                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <div class="footer-col-3 ">
                    <h3>Social Media</h3>

                    <div class="SocialMedia">
                        <div class="buttonF">
                            <div class="icon">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square FB" aria-hidden="true"></i></a></li>
                            </div>

                        </div>
                        <div class="buttonT">
                            <div class="icon">
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter-square TWT" aria-hidden="true"></i></a></li>
                            </div>

                        </div>
                        <div class="buttonI">
                            <div class="icon">
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram INST" aria-hidden="true"></i></a></li>
                            </div>

                        </div>
                        <div class="buttonL">
                            <div class="icon">
                                <li><a href="https://lk.linkedin.com/"><i class="fa fa-linkedin-square LNKDN" aria-hidden="true"></i></a></li>
                            </div>

                        </div>
                        <div class="buttonP">
                            <div class="icon">
                                <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square PNTRST" aria-hidden="true"></i></a>
                                </li>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <hr>
        </center>
        <p>Desingned by captureDream Team</p>
    </div>

    <!---------------------------end footer--------------------------->

    <script type="text/javascript">
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigationL = document.querySelector('.navigationL');
            menuToggle.classList.toggle('active');
            navigationL.classList.toggle('active');
        }
    </script>

</body>

</html>