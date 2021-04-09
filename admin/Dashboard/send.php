<?php 
include "../login_system/db_conn.php";
include '../smtp/PHPMailerAutoload.php';
if(isset($_POST['submit'])){
$ids = $_GET['id'];
$sql = "select id,name,email,city,payment_id,event_pass_id,payment_status,country,added_on from payment where id={$ids}" ;
$result = $conn-> query($sql);
if($result-> num_rows >0){
while($row = $result-> fetch_assoc()){
  $html = "<div class='container-fluid' style='width:100%; height:340px; text-align:center;'>
			    <div class='col-md-6 mx-auto mt-5'>
			        <div class='payment' style=' border:1px solid #f2f2f2; height:280px; border-radius:20px; background:#fff;'>
			            <div class='payment_header' style='background:rgba(255,102,0,1); padding:10px; border-radius:20px 20px 0px 0px;'>
			            <h2 style='color:blank'>TheEvent</h2>
			            </div>
			            <div class='content' style=' text-align:center;'>
			               <h1 style=' font-size:25px; padding-top:25px;'>Welcome to Marketing Webinar !</h1>
			               <p>Payment Id : ".$row['payment_id']."</p>
			               <p>Payment Status :".$row['payment_status']."</p>
			               <p>Your Entry Pass Id :".$row['event_pass_id']."</p>
			               <a href='http://localhost:8080/TheEvent/' style='width:200px; height:35px; color:#fff; border-radius:30px; padding:5px 10px; background:rgba(255,102,0,1); transition:all ease-in-out 0.3s; text-decoration:none; background:#000;'> Go back to home </a>
			            </div>
			        </div>
			   	</div>
			</div>";
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com';                              
  $mail->Port=587;
  $mail->SMTPSecure='tls';
  $mail->SMTPAuth=true;
  $mail->Username='apnafolio@gmail.com';
  $mail->Password='Lufa@7917';
  $mail->SetFrom('apnafolio@gmail.com');
  $mail->addAddress($row['email']);   
  $mail->IsHtml(true);
  $mail->Subject = "Your Payment details and Entry Pass Id :";
  $mail->Body=$html;
  $mail->SMTPOptions= array('ssl' =>array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
  ));
 
  if($mail-> send()){
    echo '<script>alert("Mail Send")</script>';
   header("Location: cust_record.php");
  }
  else{
    echo '<script>alert("Error occur")</script>';
     header("Location: cust_record.php");
  }

}
}
}
else if(isset($_POST['save'])){
include "../login_system/db_conn.php";
if(isset($_POST['save'])){
$event_pass_id = $_POST['event_pass_id'];
$ids = $_GET['id'];
$sql = "update payment set event_pass_id='$event_pass_id' where id={$ids}" ;
mysqli_query($conn,$sql);
header("Location: cust_record.php");
}
}
?>
