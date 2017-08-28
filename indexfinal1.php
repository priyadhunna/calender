<?php
require_once 'scripts/dp.php';
//require_once 'scripts/connection.php';
require_once 'scripts/per.php';
require_once 'scripts/fun.php';
require_once 'scripts/rewards.php';
require_once 'scripts/HealthQuotes.php';
require_once 'scripts/Analysis.php';
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <script src="jquery-2.1.4.min.js"></script>
  <script>
    jQuery(window).load(function(){
        jQuery(".hameid-loader-overlay").fadeOut(500);
    });
</script>

    <script src="Chart.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <style>
  .hameid-loader-overlay {
    width: 100%;
    height: 100%;
    background: url('dist/img/preloader.gif') center no-repeat #FFF;
    z-index: 99999;
    position: fixed;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="hameid-loader-overlay"></div>
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="indexfinal.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>F</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HEL</b>FIS</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                     
                      </div>
                      <h4>
                      
                        
                      </h4>
                    
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                       
                      </div>
                     
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                       
                      </div>
                      
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        
                      </div>
                      <h4>
                     <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                       
                      </div>
                      <h4>
                      
                       
                      </h4>
                    </a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      
                    </a>
                  </li>
                  <li>
                    <a href="#">
                     
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    
                    </a>
                  </li>
                  <li>
                    <a href="#">
                  
                    </a>
                  </li>
                  <li>
                    <a href="#">
                  
                    </a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="label label-danger"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                     >
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                       
                        <small class="pull-right"></small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                       
                        <small class="pull-right"></small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only"></span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#"></a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
              <?php 

              echo getData(session_id()); 

              ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                
                <big><?php 

              echo getData(session_id()); 

              ?></big>
                
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="scripts/home.php?logout=true" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <big><?php 

              echo getData(session_id()); 

              ?></big>
                
          <br>
          <br>
          <a href="#"><i class="fa fa-circle text-success"></i> Profile</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
          
            </span>
          </a>
          
        </li>
        
       
        <li>
          <a href="scripts/calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
                         </span>
          </a>
        </li>
          <li>
          <a href="pages/store.html">
            <i class="fa fa-shopping-cart"></i> <span>Store</span>
            
          </a>
        </li>  

         <li>
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>Performance</span>
            
          </a>
        </li> 
        <li>
          <a href="examples/blank.html">
            <i class="fa fa-question"></i> <span>FAQs</span>
            
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Terms</span>
            
          </a>
        </li>


          <li class="active-pro">
            <a href="#">
               <i class="fa fa-rocket"></i><span>Upgrade to PRO</span>
            </a>
          </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
          
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow"></small>
              <small class="label pull-right bg-green"></small>
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            
            <span class="pull-right-container">
          
            </span>
          </a>
          <ul class="treeview-menu">
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
         
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"></a></li>
            <li>
              <a href="#">
                <span class="pull-right-container">
                 
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"></a></li>
                <li>
                  <a href="#">
                    <span class="pull-right-container"></span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"></a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"></span></a></li>
        <li class="header"></li>
     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p style="font-size:20px";>Assess me</p>
               <br> <br>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a  data-toggle="modal" href="#myModa23" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
                <div class="modal fade" id="myModa23" role="dialog">
       <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
       
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>AssessMe</center></h4>
        </div>
        </div>
        </div>
        <div class="modal-body">
          <?php require 'scripts/assessme.php'; ?>
          </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
</div>

    <!-- Main content -->
   




        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              
              <p style="font-size:20px";>Analysis</p>
               <br> <br>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a  data-toggle="modal" href="#myModa22" class="small-box-footer" >More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        
   <div class="modal" id="myModa22" data-backdrop="static">

  <div class="modal-dialog">
      <div class="modal-content">
      <div class="box-title">
        <div class="modal-header">
        <div class="footer">
      
       <div class="widget-user-header bg-green">
           <button type="button" class="close" data-dismiss="modal"  style="font-size:35px";>&times;</button>

              <div class="legend">
                <h4 class="modal-title"><center>Analysis</center></h4>

               </div>
        </div>
        </div>
      <hr>
<canvas id="mycanvas" width="385" height="250">
    
    <?php 
      echo getAnalysis();
    ?>
    </div>
    
      </div>
      </div>
     

    </div>
    
  </div>
  </div>
  





        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">



              <p style="font-size:20px";>Performance</p>
               <br> <br> 
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a data-toggle="modal" href="#myModal23"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
          <div class="modal fade" id="myModal23" role="dialog">
       <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-orange">
       
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Performance</center></h4>
        </div>
        </div>
        </div>
        <div class="modal-body">
            <!-- /.box-header -->
            <div class="box-body chat" id="chat-box">
             <div class="content table-responsive table-full-width">
             <?php  
                
               echo $data;

             ?>
                               <!--  <table class="table table-hover table-striped" id="mytable">
                                    <thead>
                                        <th>RANK</th>
                                        <th>NAME</th>
                                        <th>POINTS</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Salman Khan</td>
                                            <td>24</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Virat Kohli</td>
                                            <td>27</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Priya</td>
                                            <td>34</td>
                                            
                                         </tr>
                                           <tr>
                                            <td>1</td>
                                            <td>Salman Khan</td>
                                            <td>24</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Virat Kohli</td>
                                            <td>27</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Priya</td>
                                            <td>34</td>
                                            
                                         </tr>
                                           <tr>
                                            <td>1</td>
                                            <td>Salman Khan</td>
                                            <td>24</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Virat Kohli</td>
                                            <td>27</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Priya</td>
                                            <td>34</td>
                                            
                                         </tr>
                                           <tr>
                                            <td>1</td>
                                            <td>Salman Khan</td>
                                            <td>24</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Virat Kohli</td>
                                            <td>27</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Priya</td>
                                            <td>34</td>
                                            
                                         </tr>  <tr>
                                            <td>1</td>
                                            <td>Salman Khan</td>
                                            <td>24</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Virat Kohli</td>
                                            <td>27</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Priya</td>
                                            <td>34</td>
                                            
                                         </tr>
                                      </tbody>
                                  </table> -->

          </div>
          </div>

        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
           
             








    <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              

              <p style="font-size:20px";>Rewards</p>
               <br> <br>
            </div>
            <div class="icon">
              <i class="fa fa-gift""></i>
            </div>
            <a  data-toggle="modal" href="#myModa24"  class="small-box-footer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
                   <div class="modal" id="myModa24" data-backdrop="static" width="385" height="250">
  <div class="modal-dialog" width="385" height="250">
      <div class="modal-content"> 
        <div class="modal-header">

        <div class="footer">
      

          
           </div>
         <div class="modal-header">
         <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-red">
       
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Rewards</center></h4>
        </div>
        </div>
        </div>
            <!-- Widget: user widget style 1 -->
            <br><br>
          <div class="box box-widget widget-user-0">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
             
              <!-- /.widget-user-image -->
            <div class="box-footer no-padding">
              <?php
                 echo $rewards;

              ?>
            </div>
          </div>
          <!-- /.widget-user --> 


        </div>
         <div class="modal-footer">
         
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

        
           </div>
        </div>

        </div>
        </div>
        </div>


        <!-- ./col -->
      
      <!-- /.row -->
      <!-- Main row -->
   
          <!-- /.nav-tabs-custom -->

 </div>
          <div class="row">
           <div class="col-sm-6">
          <!-- Chat box -->
          <div class="box box-success" >
            <div class="box-header"  >
             

               <h3 class="modal-title">DIET PLAN</h3>
               <hr>
             <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
            <button data-toggle="modal" data-target="#myMod2" class="btn btn-primary">Whole Week</button>
          
              </div>
            </div>
            
           
            </div>
          
            <div class="modal" id="myMod2" data-backdrop="static">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Diet Chart</h4></div>
          <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Day</th>
                  <th>Breakfast</th>
                  <th>Lunch</th>
                  <th>Dinner</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Monday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                <tr>
                  <td>Tuesday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                 <tr>
                  <td>Wednesday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                 <tr>
                  <td>Thursday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                 <tr>
                  <td>Friday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                 <tr>
                  <td>Saturday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
                 <tr>
                  <td>Sunday</td>
                  <td>Omellete</td>
                  <td>Dal, Chapati</td>
                  <td>Dal, Chapati</td>
                  
                </tr>
            
               </tbody>
             </table>
           </div>
          

        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>

        </div>
      </div>
    </div>
</div>
            <div class="box-body chat" id="diet-box">
              <!-- chat item -->
              <div class="item">
                <img src="icons/break.jpg" height="14" width="15" alt="user image" class="online xyz">

                <p class="message">
                  <a class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 9:00AM</small>
                    
                    
                    <h2 align="justify"><i><b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Breakfast</b></i></h2>
                  </a><br><pre><h4>Eggs
Cereals
Milk<h4>
                      </pre>
                      <br><br>
                  
                </p>
            
                <!--<div class="attachment">
                  <h4>Attachments:</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>-->
                <!-- /.attachment -->
              </div>
              <!-- /.item -->
              <!-- chat item -->
               <div class="item">
                <img src="icons/lunch.jpg" height="14" width="15" alt="user image" class="offline">

                <p class="message">
                  <a class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:00PM</small>
                    
                    <h2 align="justify"><i><b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lunch</b></i></h2>
                  </a><br><pre><h4>Beans Thoran,Potato Curry & Rice,Masala bhindi
Black Channa and Coconut Stew</h4>
                      </pre>
                      <br><br>
                  
                  
                  
                </p>
              </div>
             <!-- /.item -->
              <!-- chat item -->
             <div class="item">
                <img src="icons/dinner.jpg" height="30" width="30"" alt="user image" class="offline">

                <p class="message">
                  <a class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 9:00PM</small>
                    

                    <h2 align="justify"><i><b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dinner</b></i></h2>
                  </a><br><pre><h4>Grapefruit and Avocado Salad With Seared Salmon
Keema Biryani. 
Dum Paneer Kali Mirch.
Shahi Egg Curry.</b></pre><br><br>
                  
                  
                  
                </p>
              </div>
              <!-- /.item -->
            </div>

            <!-- /.chat -->
            
          </div>
          </div>
          <!-- /.box (chat box) -->
          
         

            <!-- MODAL 2 -->
        <div class="col-sm-6">
        
          <div class="box box-success">

            <div class="box-header">
            <h3 class="modal-title">CLASSES</h3>
            <hr>
             <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                <button type="button" class="btn btn-info" onclick="location.href='scripts/calendar.php'">Make Appointment</button>
          
              </div>
            </div>
            </div>
          
            
        
        <div class="modal-header"  id="class-box">

        <h3 class="modal-title"><i style="color:blue">Today</i></h3>
        <div class="row">

          <div class="modal-body">
          <div class="box-body">
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
       
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TIME</h5>

                    <span class="description-text">11:00AM</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">DATE</h5>
                    <span class="description-text">12/8/2017</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLASS</h5>
                    <span class="description-text">AEROBICS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.widget-user -->
        </div>
    
          <!-- /.widget-user -->
        </div>
        </div>
         <div class="modal-header">
        <h3 class="modal-title"><i style="color:blue">Upcoming</i></h3>
        <div class="row">
        <div class="modal-body">
          <div class="box-body">
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
       
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TIME</h5>

                    <span class="description-text">11:00AM</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">DATE</h5>
                    <span class="description-text">12/8/2017</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLASS</h5>
                    <span class="description-text">AEROBICS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.widget-user -->
        </div>
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-orange">
       
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TIME</h5>

                    <span class="description-text">11:00AM</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">DATE</h5>
                    <span class="description-text">12/8/2017</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLASS</h5>
                    <span class="description-text">AEROBICS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.widget-user -->
        </div>
    
          <!-- /.widget-user -->
           <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
       
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TIME</h5>

                    <span class="description-text">11:00AM</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">DATE</h5>
                    <span class="description-text">12/8/2017</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLASS</h5>
                    <span class="description-text">AEROBICS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.widget-user -->
        </div>
         <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-red">
       
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">TIME</h5>

                    <span class="description-text">11:00AM</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">DATE</h5>
                    <span class="description-text">12/8/2017</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLASS</h5>
                    <span class="description-text">AEROBICS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          <!-- /.widget-user -->
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
    <div class="row">
          <div class="col-md-12 col-md-12">
           <div class="box box-info">
            <div class="box-header">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-quote-left"></i>

              <h3 class="box-title">Health Quotes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
              <?php
              
               echo quoter();
               ?>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.box -->
        </div>
        </div>
       












  </div>
        <!-- /.col -->
          

          
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <div class="container-fluid">
  
  <nav class="pull-left">
                  
  
                            <a href="http://www.helfis.com/">
                                Home
                            </a>&nbsp &nbsp 
                       
                            <a href="#">
                                Company
                            </a>&nbsp &nbsp 
              
                            <a href="#">
                                Portfolio
                            </a>&nbsp &nbsp 
                        
                            <a href="#">
                               Blog
                            </a>&nbsp &nbsp 
                        </li>
                    </ul>
         </nav>
   
      <p class="copyright pull-right">
                    &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
    
   <div >
   
  </footer>
  
    </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
