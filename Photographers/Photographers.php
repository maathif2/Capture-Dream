<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Photographers/PhotographersCSS.css">
    <title>Capture Dream</title>
</head>

<body>

    <!---------------------------Header--------------------------->

    <nav>
        <div class="menuToggle " onclick="toggleMenu();">
        </div>

        <ul class="navigationL">
            <li><a  href="../Home/Home.php">Home</a></li>
            <li><a class="active" href="../Photographers/Photographers.php">Photographers</a></li>
            <li><a  href="../CD Story/Story.php">About Us</a></li>
            <li><a href="../Contact Us/Contact Us.php">Contact Us</a></li>
        </ul>
        <ul class="navigation-R">
            <li><a  href="../Login/Login.php">Login</a></li>
            <li><a href="../Sign Up Page/SignUp.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="logo_searchBar">
            <div class="col-lg-6 ">
                 <a href="../Home/Home.php"><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------Header--------------------------->
  

    <!---------------------------Photographers--------------------------->
    
    <div class="photographerAccountContainer">
        
        <div class="albumArea">
            <div class="albums">
                <div class="album">
                    <div class="imgbox">
                        <img src="../images/photographers/1.jpg" alt="">
                    </div>
                    <p>Ramindu </p>
                </div>
                
                <a href="../photograher account packages/photographer's packages.php">
                    <div class="album">
                   
                        <div class="imgbox">
                            <img src="../images/photographers/kasun.jpg" alt="">
                        </div>
                        <p>Kasun Perera</p>
                    </div>
                </a>
                
                <div class="album">
                    <div class="imgbox">
                        <img src="../images/photographers/2.jpg" alt="">
                    </div>
                    <p>Aathif </p>
                </div>
                <div class="album">
                    <div class="imgbox">
                        <img src="../images/photographers/3.jpg" alt="">
                    </div>
                    <p>Umesh</p>
                </div>
                <div class="album">
                    <div class="imgbox">
                        <img src="../images/photographers/4.jpg" alt="">
                    </div>
                    <p>Akmal</p>
                </div>
                <div class="album">
                    <div class="imgbox">
                        <img src="../images/photographers/5.jpg" alt="">
                    </div>
                    <p>Rushan</p>
                </div>
               
            </div>
            
        </div>
    </div>

    <!---------------------------Photographers--------------------------->
    

    <!---------------------------footer--------------------------->

    <div class="footer">
        <div class="grid-container">
            <div class="grid-item">
                <div class="footer-col-1">
                    <h3>Quick Links</h3>
                    <ul class="Qlinks">
                        <li><a  href="../Home/Home.php">Home</a></li>
                        <li><a class="active" href="../Photographers/Photographers.php">Photographers</a></li>
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