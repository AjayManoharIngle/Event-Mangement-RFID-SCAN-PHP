
<?php
session_start();
include('db.php');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['gender']) && isset($_POST['phoneno']) && isset($_POST['address'])){
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $city = $_POST['city'];
	    $country = $_POST['country'];
	    $gender = $_POST['gender'];
	    $phoneno = $_POST['phoneno'];
	    $address = $_POST['address'];
	    $payment_status = "pending";
	    $added_on = date('Y-m-d h:i:s');
	    
    mysqli_query($con,"insert into payment(name,email,city,country,gender,phoneno,address,payment_status,added_on) values('$name','$email','$city','$country','$gender','$phoneno','$address','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>