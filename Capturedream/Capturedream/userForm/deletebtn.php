<?php
	include "../config/config.php";
	include "../config/core.php";
    if(isset($_SESSION['user_id'])){
        header("Location: ../Home/Home.php");
    }
?>

<?php
    $cust_id = $_GET["cus_id"];
    
    $sql = "DELETE FROM customers WHERE cus_id = '$cust_id'";
    if(mysqli_query($con, $sql)){
        echo "<script>alert('Data deleted successfully!')</script>";
        header ("Location:../Home/Home.php");
    }
    else{
        echo "<script>alert('Error!')</script>";
        echo "Error: 3" . $sql . "<br>" . mysqli_error($con);
        header ("Location:../Home/Home.php");
    }
?>