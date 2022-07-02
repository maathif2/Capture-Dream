<?php
	include "../config/config.php";
	include "../config/core.php";
    if(!isset($_SESSION['user_id'])){
        header("Location: ../Home/Home.php");
    }else{
        $user_id = $_SESSION['user_id'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../userForm/userFormCSS.css">
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
        <!-- <div class="navigation-R">
            <div class="poto">
                <img src="../images/photographers/kasun.jpg" alt="">
            </div>
        </div> -->
    </nav>
    <div class="logo_searchBar">
            <div class="col-lg-6 ">
                 <a href=""><img class="logo" src="./CD logo.png"></a>
            </div>
    </div>

    

    <!---------------------------Header--------------------------->
  

    <!---------------------------Userform--------------------------->
    
    <div class="userformContainer">
    <div class="userformarea"> 
            <center><h1 style='color:rgb(255, 208, 0)'>Fineclix Photographer Interface</h1></center>
        <div class="container">
        <?php 
                $sql ="SELECT * from customer WHERE cus_id = '$user_id'"; 
                if(mysqli_query($con, $sql)){ 
                $result=mysqli_query($con, $sql); 
                while($row = mysqli_fetch_assoc($result)){ 
                    $oid = $row['cus_id']; 
            ?> 

            <input type="text" id="cus_id" name="cus_id" value="<?php echo $row['cus_id'] ?>" hidden>
            <h2 align='center'>Welcome <?php echo $row["u_name"]?></h2>
            <h2 align='center' style='color:rgb(255, 208, 0)'>Profile</h2>
        
        <center>
            <h3 >Username        :  <?php echo $row["u_name"]?></h3>
            <h3 >Data Base ID NO :  <?php echo $row["cus_id"]?></h3>
            <h3 >Email           :  <?php echo $row["cus_email"]?></h3>
            <h3 >Contact NO      :  <?php echo $row["telephone"]?></h3>
            <h3 >Address         :  <?php echo $row["address"]?></h3>
        <div class="link">  
            <a class="btna" href="../Home/logout.php">Logout</a>
        </div> 
        </center>
    </div>   

    <?php
        }
    }
    ?>
    
    



</div>
    </div>

    <!---------------------------Userform--------------------------->
    

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
        <p>Desing by captureDream Team</p>
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