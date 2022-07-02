<?php
	include "../config/config.php";
	include "../config/core.php";
    if(isset($_SESSION['user_id'])){
        header("Location: ../Home/Home.php");
    }
?>

<?php
    $id = $_POST["cus_id"];
    $username = $_POST["name"];
    $email = $_POST["emails"];
    $mobile = $_POST["telephone"];
    $address = $_POST["address"];
    $pw = $_POST["psw"];
    

    $sql = "UPDATE customer SET u_name = '$username', cus_email = '$email', telephone = '$mobile', address = '$address', password = '$pw' WHERE cus_id= '$id'"; 
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Data inserted successfully!')</script>";
        header ("Location:userForm.php");
    }
    else{
        echo "<script>alert('Error!')</script>";
        header ("Location:update.php");
    }
?>