
<?php
	include "../config/config.php";
	include "../config/core.php";
    if(isset($_SESSION['user_id'])){
        header("Location: ../Home/Home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="LoginCSS.css">
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
            <li><a class="active" href="../Login/Login.php">Login</a></li>
            <li><a href="../Sign Up Page/SignUp.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="logo_searchBar">
            <div class="col-lg-6 ">
                 <a href=""><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------Header--------------------------->
  

    <!---------------------------Login--------------------------->
    
    <div class="login_UpContainer">
        
        <div class="login_Box">
            <div class="box">
                <h2>Login your account</h2>
                <form action="#" method="post">
                <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $username = $_POST['name'];
                    $pass = $_POST['psw'];
                    $password =$pass;
                    $sql = "SELECT * FROM customer WHERE u_name='$username' AND password='$password'";
                    $result = $con->query($sql);
    
                    if($result->num_rows > 0){
                        //login success
                        $row=$result->fetch_assoc();
                        $_SESSION["user_id"] = $row['cus_id']; //set session
                        header("Location: ../Home/Home.php");
                    }else{
                        //login failed
                        // echo "Error: 2" . $sql . "<br>" . mysqli_error($con);
                        echo "<div style='color:red'>Invalid username/password<br/></div>";
                    }
                    // echo "Error: 3" . $sql . "<br>" . mysqli_error($con);
                }

            ?>
                    <input type="text" placeholder="Username" name="name" class="inputBox" required>
                    <input type="password" placeholder="Enter Password" name="psw" id="id1" class="inputBox" required>
                    <p><span><input type="checkbox" class="chekbox"></span>Keep Me Logged In</p>
                    <button type="submit" class="loginBtn" name="login_btn" >Login</button>
                </form>
                <a href="">Forgot your password ?</a><br><br>
                <a href="photologin.php">Photographer Login</a>
                
                

                <center><hr></center>
            </div>
        </div>
        
        
    </div>
    
    <!---------------------------Login--------------------------->


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