<?php
	include "../config/config.php";
	include "../config/core.php";
    if(isset($_SESSION['user_id'])){
        header("Location: ../Home/Home.php");
    }
?>

<?php
    $username = $_POST["name"];
    $email = $_POST["emails"];
    $mobile = $_POST["telephone"];
    $address = $_POST["address"];
    $pw = $_POST["psw"];
    

    $sql = "INSERT INTO customer(u_name, cus_email, telephone, address, password) VALUES ('$username', '$email', '$mobile', '$address', '$pw')";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Data inserted successfully!')</script>";
        header ("Location:../Home/Home.php");
    }
    else{
        echo "hello";
        echo "<script>alert('Error!')</script>";
        header ("Location:SignUp.php");
    }
?>