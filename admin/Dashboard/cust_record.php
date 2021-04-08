
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?><!DOCTYPE html>
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
  <link href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
  <link href="../vendor/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.min.css">
</head>

<body id="page-top">
<div id="wrapper">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../Dashboard/remote_cust.php">
   
      <div class="sidebar-brand-text mx-3 " id="adminsection" > <?php echo $_SESSION['email']; ?></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Heading -->
     <li class="nav-item active">
        <a class="nav-link" href="Dash.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Dash_chart.php">Analysis charts</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
    <a class="nav-link" href="cust_record.php">

    <i class="fa fa-calendar"></i>    
    <span>Register Users</span></a>
  </li>
  
  </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Addons
    </div>
    <!-- Navs Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Settings</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Logout</h6>
            <a class="collapse-item" href="../login_system/logout.php">Logout system</a>
            <div class="collapse-divider"></div>
          </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">  
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
        </div>
      </form>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
              </div>
            </form>
          </div>
        </li>
      
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="admin"></span>
                <i class="fas fa-sign-out-alt "></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="text-align: center;" >
                 <!--  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> -->
                  Logout
                </a>
            </div>
          </li>
      </ul>
    </nav>
  <!-- End of Topbar -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="../login_system/logout.php" method="POST" id="logform"> 
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
   
      <div class="card shadow mb-4" style="margin-top:10px;">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registerd User Data</h6>
        </div>
     
        <div class="card-body">
       
        

    <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-bordered "   width="100%" cellspacing="0">
              <thead class="table-success">
                <tr>
                      <th>#</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>CITY</th>
                      <th>COUNTRY</th>
                      <th>GENDER</th>
                      <th>PHONENO</th>
                      <th>ADDRESS</th>
                </tr>
              <?php 
              include "../login_system/db_conn.php";
              $sql = "select id,name,email,city,country,gender,phoneno,address from payment" ;

              $result = $conn-> query($sql);
              if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()){
                echo "<tbody><tr><td>".$row["id"] ."</td><td>".$row["name"]. "</td><td>".$row["email"]. "</td><td>".$row["city"]. "</td><td>".$row["country"]. "</td><td>".$row["gender"]. "</td><td>".$row["phoneno"]. "</td><td>".$row["address"]."</td><tr></tbody>";
              }
            }
              ?>
              </thead>
              
            </table>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid">
   
      <div class="card shadow mb-4" style="margin-top:10px;">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users's Payment Status :</h6>
        </div>
     
        <div class="card-body">
       
        

    <div class="table-responsive" style="margin-top: 15px;">
            <table class="table table-bordered "   width="100%" cellspacing="0">
              <thead class="table-success">
                <tr>
                      <th>#</th>
                      <th>PAYMENT ID</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>CITY</th>
                      <th>PAYMENT STATUS</th>
                      <th>DATE AND TIME</th>
                      <th>COUNTRY</th>
                      <th>SEND</th>

                </tr>
              <?php 
              include "../login_system/db_conn.php";
              $sql = "select id,name,email,city,payment_id,payment_status,country,added_on from payment" ;

              $result = $conn-> query($sql);
              if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()){
                echo "<tbody><tr><td>".$row["id"] ."</td><td>".$row["payment_id"]. "</td><td>".$row["name"]. "</td><td>".$row["email"]. "</td><td>".$row["city"]. "</td><td>".$row["payment_status"]. "</td><td>".$row["added_on"]. "</td><td>".$row["country"]. "</td><td><button class='btn btn-primary' ><a style='color:white; text-decoration:none;' href='notify.php?id=".$row['id']." '>Send</a></button>"."</td><tr></tbody>";
              }
            }
              ?>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  
</div>
</div>
</div>
</body>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>
<!-- Page level custom scripts -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../vendor/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
</html>
<?php 
}else{
     header("Location:../../index.html");
     exit();
}
 ?>