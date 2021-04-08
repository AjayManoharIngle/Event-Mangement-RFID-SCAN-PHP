
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TheEvent</title>
  <!-- Custom fonts for this template-->
 <!-- Favicons -->
  <link href="../img/logo1.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body style="background-color: #cceeff">
  <!-- Page Wrapper -->
<div id="wrapper" >
<div class="container" >
<!-- Outer Row -->
<div class="row justify-content-center" >
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #b3b3cc">
          <div class="card-body p-0">
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <img src="../img/logo.png"  height="80px" width="50%" class="img-fluid">
                      <h4 style="text-align: center; margin-top: 20px; color: black;">Admin Login</h4>
                    </div>
                    <br>
                    <form class="user" id="myForm"  method="POST" action="login.php">
                        <?php if (isset($_GET['error'])) { ?>
                         <p class="error" style="font-size: 15px; width: 100%; text-align: center; color: red" ><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                      <div class="form-group">
                        <input type="email" name="uname" class="form-control form-control-user" placeholder="Enter Email Address" id="user"  required>
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="pass" required>
                      </div>
                      <button type="submit" name="login_btn" id="btn" class="btn btn-primary btn-user btn-block" > Login </button>
                      <hr>
                    </form>
                    <div class="text-center">
                      <a class="small" href="../../index.html" style="text-decoration:none; color:blue;" >back to home</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>
<!-- Page level custom scripts -->
</body>
</html>











