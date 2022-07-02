<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Contact UsCSS.css">
    <title>Capture Dream</title>
</head>

<body>

    <!---------------------------Header--------------------------->

    <nav>
        <div class="menuToggle " onclick="toggleMenu();">
        </div>

         <ul class="Qlinks">
                        <li><a  href="../Home/Home.php">Home</a></li>
                        <li><a  href="../Photographers/Photographers.php">Photographers</a></li>
                        <li><a class="active" href="../CD Story/Story.php">About Us</a></li>
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
  
    
    <div class="ContactUsContainer">
        <div class="contactUs">
            <div class="mapContainer">
                <div class="map">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.906029582921!2d79.86709951459264!3d6.
                    901840695012912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597c1937e721%3A0xcb8dc39b639e7e5e!2s
                    Bauddhaloka%20Mawatha%2C%20Colombo%2000700!5e0!3m2!1sen!2slk!4v1621801876244!5m2!1sen!2slk" 
                    width="100%" height="300px" style="border-radius:20px; border: none;" 
                    allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contactOption">
                    <div class="location">
                        <i class="fa fa-map-marker  icon1" aria-hidden="true" ></i>
                        <p>No 17,Bauddaloka mawatha,Colombo 7</p>
                    </div>
                    <div class="Mail">
                        <a><i class="fa fa-envelope  icon2" aria-hidden="true " ></i></a>
                        <p><a href="#" >capturedream123@gmail.com</a></p>
                    </div>
                    <div class="phone">
                        <i class="fa fa-phone-square  icon3" aria-hidden="true" ></i>
                        <p>011-3425000</p>
                    </div>
                </div>

            </div>
            <div class="vl"></div>
            <div class="mail">
            <form>
                <h2>Mail Us</h2>
                <input type="text" placeholder="Name" class="emailbox">
                <input type="text" placeholder="Email" class="emailbox">
                <textarea name="massage" placeholder="Your message here" cols="30" rows="5" class="txtarea"></textarea>
                <button type="submit" class="btn">Send</button>
            </form>
            </div>
            
            
        </div>
    </div>
    

    <!---------------------------footer--------------------------->

    <div class="footer">
        <div class="grid-container">
            <div class="grid-item">
                <div class="footer-col-1">
                    <h3>Quick Links</h3>
                    <ul class="Qlinks">
                        <li><a  href="../Home/Home.php">Home</a></li>
                        <li><a  href="../Photographers/Photographers.php">Photographers</a></li>
                        <li><a class="active" href="../CD Story/Story.php">About Us</a></li>
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