<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>


<?php


session_start();?>
<?php
$session=$_SESSION['id'];
        require('config/config.php');
        require('config/db.php');

        $result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }




?>


        

 <!-- Sidebar -->
 

    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg">
           
            <div class="sidebar-wrapper">
                
                
                <?php include('includes/sidebar.php'); ?>

              

            </div>
        </div>
        <div class="main-panel">
        <?php include('includes/navbar.php'); ?>
        
 <!-- Sidebar -->
 

 <!-------- home panel ----------------------------->
 <div class="content">
                <div class="container-fluid">
                    <div class="section">
                    </div>
                
                    <div class = "row">
                    <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                            <br/>
                                <div class="col-md-12">

                                </div>
                                <div class="col-md-12">
                                   
                                    </a>
                                </div>
                                <div class="card-header ">
                                    <h4 class="card-title">View Bill</h4>
            
                                    </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped table-bordered">
                                       
                                   
                                <thead class="text-center">
    <th>ID</th>
    <th>Previous Reading</th>
    <th>Present Reading</th>
    <th>Price</th>
    <th>Date</th>
    <th>Bill Amount</th>
    <th>Action</th>
</thead>

<tbody>
    <div class="card-header">Bill #{{ $bill->id }}</div>

    <div class="card-body">
        <p>Previous meter reading: {{ $bill->prev }}</p>
        <p>Present meter reading: {{ $bill->pres }}</p>
        <p>Price per unit: {{ $bill->price }}</p>
        <p>Total units consumed: {{ $bill->pres - $bill->prev }}</p>
        <p>Total bill amount: {{ ($bill->pres - $bill->prev) * $bill->price }}</p>
        <p>Bill date: {{ $bill->date }}</p>                      
               </div>
              
             
           </div>
         </div>
      </div>
    </div>
  </div>
   <!-----  ######################################### -->
   













    
 <!-- Footer -->

        
           
                            
    </div>
    
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

