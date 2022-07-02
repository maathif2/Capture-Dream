<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Payment method/payment methodCSS.css">
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
            <li><a href="../Sign Up Page/SignUp.php">SignUp</a></li>
        </ul>
    </nav>
    <div class="logo_searchBar">
            <div class="col-lg-6 ">
                 <a href=""><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------Header--------------------------->
  

    <!---------------------------payment--------------------------->
    
    <div class="paymentContainer">
        <div class="paymentArea">
            <center><h1>Payment Method</h1></center>
            <div class="card">
                <img src="../Payment method/visa.png" alt="visa">
                <img src="../Payment method/mastercard.jpg" alt="master">
            </div>
            <div class="input">
                <div class="Cname">
                    <label>Name on Card</label>
                    <input type="text" required>
                </div>
                <div class="Cnumber">
                    <label>Card Number</label>
                    <input type="text" placeholder="Your card number" required>
                </div>
                <div class="Anumber">
                    <label>Account Number</label>
                    <input type="text" required>
                </div>
                <div class="cvc">
                    <input type="text" placeholder="Mounth" required>
                    <input type="text" placeholder="Year" required>
                    <label>CVC</label>
                    <input type="text required">
                </div>
                <div class="amount">
                    <label>Amount</label>
                    <input type="text"required>
                </div>
                
            </div>
            <button type="button" onclick="pageRedirect()" >Pay Now</button>
            <button type="button" onclick="paycancel()">Cancel</button>
        </div>

    </div>

    <!---------------------------payment--------------------------->
    

    <!---------------------------footer--------------------------->

    <div class="footer">
        <div class="grid-container">
            <div class="grid-item">
                <div class="footer-col-1">
                    <h3>Quick Links</h3>
                    <ul class="Qlinks">
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
                                <li><a href="https://www.facebook.com/twitter"><i class="fa fa-facebook-square FB" aria-hidden="true"></i></a></li>
                            </div>

                        </div>
                        <div class="buttonT">
                            <div class="icon">
                                <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter-square TWT" aria-hidden="true"></i></a></li>
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
         function pageRedirect() {
         window.location.replace("../Home/Home.php");
         alert("Payment Successfull");
         setTimeout("pageRedirect()", 10000);
          }      
          
                  function paycancel(){
                 window.location.replace("../booking page/booking.php");
                   alert("Payment Cancelled");
                 setTimeout("paycancel()", 10000);
                 
                   }
    </script>

</body>

</html>