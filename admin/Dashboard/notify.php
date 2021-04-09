<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TheEvent Panel</title>
  <!-- Custom fonts for this template-->
  <link href="../img/logo1.png" rel="icon">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
 
  <style>
    label {
      padding: 10 15px;
      margin-top: 10px;
      color: purple;
      margin-left: 15px;
    }
  </style>
</head>

<body id="page-top" style="background-color: #a366ff">
  <!-- Page Wrapper -->

<div class="container"><div class=" text-center mt-5 ">
        <h1 style="color:black">Send Notification</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <?php 
              include "../login_system/db_conn.php";
              $UIDresult=''; 
              $event_pass_id = $UIDresult;
              $ids = $_GET['id'];
              $sql = "select id,name,email,city,payment_id,payment_status,event_pass_id,country,added_on from payment where id={$ids}" ;

              $result = $conn-> query($sql);
              if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()  ){
                echo "
                        <form id='contact-form' role='form' method='post' action='send.php?id=".$row['id']."'>
                            <div class='controls'>
                                <h4 style='font-size:18px; color:black; text-align:center;'>This is details of <u> ".$row['name']."</u> check oneces.</h4>
                                <div class='row' style='margin-top:10px;'>
                                    <div class='col-md-6'>
                                        <div class='form-group'> <label for='form_name'>Payment Id</label> <input id='form_name' type='text' name='payment_id' class='form-control' disabled value=".$row['payment_id']."> </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class='form-group'> <label for='form_name'>Payment Status</label> <input id='form_name' type='text' name='payment_status' class='form-control' disabled value=".$row['payment_status']."> </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <div class='form-group'> <label for='form_name'> Event Id => $event_pass_id </label> <input id='form_name' type='text' name='event_pass_id' class='form-control' value=".$row['event_pass_id']."> </div>
                                    </div>
                                     <div class='col-md-6'>
                                     
                                      <div class='form-group'> <label for='form_name'>Save Event Id Before Send</label> 
                                      <button type='submit' class='btn btn-primary btn-send pt-2 btn-block' name='save' id='save' >Save Pass Id</button>
                                      </div>
                                     
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class='form-group'> <label for='form_email'>Email</label> <input id='form_email' type='text' name='email' class='form-control'  value=".$row['email']." disabled> </div>
                                    </div>
                                    
                                    <div class='col-md-12'>
                                    <button type='submit' class='btn btn-success btn-send pt-2 btn-block' name='submit' id='submit' >Send Payment Notification </button>
                                    </div>
                                     
                                </div>
                            </div>
                        </form>
                          ";
                        }
                        }
                       ?>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
   <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../charts/piechart.js"></script>
    <script src="../charts/barchart.js"></script>
    <script src="../charts/mapchart.js"></script>
    
    
</body>

</html>
<?php 
}else{
     header("Location:../../index.html");
     exit();
}
 ?>