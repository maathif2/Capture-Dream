<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../booking page/bookingCSS.css">
    <title>Capture Dream</title>
</head>

<body>

    <!---------------------------Header--------------------------->

    <nav>
        <div class="menuToggle " onclick="toggleMenu();">
        </div>

        <ul class="navigationL">
            <li><a  href="../Home/Home.php">Home</a></li>
            <li><a  href="../Photographers/Photographers.php">Photographers</a></li>
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
                 <a href=""><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------Header--------------------------->
  

    <!---------------------------Photographers--------------------------->
    
    <div class="packagesContainer">
        <center><div class="logoContainer">
            <center>
            <div class="logo">

            </div> </center>
            <div class="name">
                <p class="Pname">Kasun Perera</p>
            </div>
        </div>
        </center>
        <div class="packages">
            <div class="packageArea">
                <div class="imgbox">
                    
                </div>
                <div class="img">
                    <div class="img1">

                    </div>
                    <div class="img1">
                        
                    </div>
                    <div class="img1">
                        
                    </div>
                    <div class="imgL">
                        
                    </div>
                </div>
            </div>
            <div class="bookingArea">
                <div class="pkgName">
                    <h4>Description</h4>
                </div>
                <p>
				   Kasun Perera<br/>

                   Certified Professional Photographer (CPP)<br/>

                   kasunperera123@gmail.com</br/>

                   077-3456666<br/>

                   linkedin.com/in/kasunperera

                

 </p>
                <div class="bookingDate">
                    <label>Date</label>   
                    <input type="date" class="date">
                    <br>
                    <br>
                    <label>Time</label>
                    <input type="time" class="mounth" >
                    
                </div>
                <label for="">Select Event</label>
                <select name="" id="" class="select">
                    <option value="weddingEvent">Wedding Event</option>
                    <option value="weddingEvent">Gettogether Party</option>
                    <option value="weddingEvent">Model Shooting</option>
                    <option value="weddingEvent">Birthday Party</option>
                </select>
                <br>
                <br>
                <a href="../Payment method/payment method.php"><button type="button">Book Now</button></a>
            </div>
            
        </div>
        
        <div class="aboutNcontactArea">
            <div class="about">
                <h3>About Us</h3>
                <p>
                    I'm Kasun Perera.I work for captureDream company.I have expirience photography field for 4 years.
                </p>
            </div>
            <div class="contact">
                <h3>Contact Us</h3>
                    <p><a href="">kasunperera123@gmail.com</a></p>
                    <p>077-3456666</p>
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
                        <li><a  href="../Home/Home.html">Home</a></li>
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