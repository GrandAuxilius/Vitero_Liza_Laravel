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
 
 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:400px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Electric Bill System</h4>
        </div>
        <div class="modal-body">
          {{-- <p><?php include "addclient.php" ?></p> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-------------------------- modal ends ---------------------------->
      















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
                              
                                                                          
                                        <button type="button" class="btn btn-info btn-fill pull-right" data-toggle="modal" data-target="#addClientModal">Add Clients</button>
                                    
                                    </a>
                                </div>

<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addClientModalLabel">Add New Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('addClient') }}">
          @csrf
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="fname">
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lname">
          </div>
          <div class="form-group">
            <label for="lastname">Middle Initial</label>
            <input type="text" class="form-control" id="lastname" name="mi">
          </div>
         
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact">
          </div>
          {{-- <div class="form-group">
            <label for="contact">First Electricity Consumption (kWh)</label>
            <input type="text" name="meterReader" class="form-control" required="required">
          </div> --}}
          <button type="submit" name="add">Add Client</button>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
                                <div class="card-header ">
                                    <h4 class="card-title">System Clients</h4>
                                    <div class="panel panel-info">
           
                                    </div>
                             

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<table class="table table-hover table-striped">  
                                <thead>
                                <th>Id</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Mi</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </thead>
                             <tbody>

  <tr>
    @foreach ($clients as $client)
  <td>{{ $client->id }}</td>
  <td>{{ $client->fname }}</td>
  <td>{{ $client->lname }}</td>
  <td>{{ $client->mi }}</td>
  <td>{{ $client->address }}</td>
  <td>{{ $client->contact }}</td>
  <td>

    {{-- <a rel='facebox' href='#editModal' data-toggle='modal' data-id='{{ $client->id }}' data-fname='{{ $client->fname }}' data-lname='{{ $client->lname }}' data-mi='{{ $client->mi }}' data-address='{{ $client->address }}' data-contact='{{ $client->contact }}'> --}}
      <button type="button" class="btn btn-primary btn-sm btn-fill" data-toggle="modal" data-target="#editClientModal{{ $client->id }}">Update</button>
    {{-- </a> --}}
        &nbsp; &nbsp;
        <form
        action="{{ route('client.delete', ['id' => $client->id]) }}"
        method="POST">
        @method('delete')
        @csrf
        {{-- <a rel='facebox' href='del.php?id='> --}}
         <button class="btn btn-secondary btn-sm btn-fill\">Delete</button>
        {{-- </a> --}}
        </form>
       </td>
      
      </tr>
      @endforeach
       </tbody>
</table>


<!-- Edit Modal -->
@foreach ($clients as $client)
<div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="editClientModalLabel{{ $client->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Owner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="editForm" action="{{ route('client.update', ['id' => $client->id]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="{{ $client->fname }}">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{ $client->lname }}">
          </div>  
          <div class="form-group">
            <label for="mi">Middle Initial</label>
            <input type="text" class="form-control" id="mi" name="mi" value="{{ $client->mi }}">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}">
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ $client->contact }}">
          </div>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
   <!-----  ######################################### -->
   

</div>


       
        </div>

    
        </div>
        </div>  

        
        </div>
        </div>
    
 <!-- Footer -->

        
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
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

</html>
