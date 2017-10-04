
<?php

require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php require_once 'fun.php'; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <title>User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="icon" href="../dist/img/credit/favicon.png" type="image/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../indexfinal1.php" class="logo">
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                
              </li>
              <!-- Menu Body -->
             <!--  <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              <!-- </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Profile</a>
        </div>
      </div></div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
       
       
        
       
        
        
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"></small>
              <small class="label pull-right bg-blue"></small>
            </span>
          </a>
        </li>




         <li>
          <a href="http://www.mobigarage.com/">
            <i class="fa fa-shopping-cart"></i> <span>Store</span>
            
          </a>
        </li>  

         
        </li> 
        <li>
          <a href="scripts/faq.php">
            <i class="fa fa-question"></i> <span>FAQs</span>
            
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Terms</span>
            
          </a>
        </li>
       
        <li class="treeview active">
          <a href="#">
            
            <span class="pull-right-container">
                  </span>
          </a>
          <ul class="treeview-menu">
           
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
                    <span class="pull-right-container">
                      
                    </span>
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
        <li><a href="../../documentation/index.html"></span></a></li>
        <li class="header"></li>
        <li><a href="#"></span></a></li>
        <li><a href="#"></span></a></li>
        <li><a href="#"></span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
        <div class="col-sm-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Profile</a></li>
              <li><a href="#accset" data-toggle="tab">Account Settings</a></li>
              <!-- <li><a href="#settings" data-toggle="tab">Settings</a></li> -->
            </ul>
                <div class="col-sm-20">  <div class="col-sm-3" style="padding-top:5%; zoom:0.9;">
             <div class="wrap">
   <div class="thumb"> <img id="img" src="../dist/img/user.jpg"  />
     </div>
     </div>
    <br><br>
   <form action="">
    <label for="upload">
      <input type='file' id="upload" style="display: block;
    margin-top: 10px;;
"></label>
     
  </form>
  </div><h3 class="profile-username text-center">
                 <span class="hidden-xs"> <?php 
              echo getData(session_id()); 
              ?> </span>

              </h3>
             
           <div class="tab-content">
           
             <div class="tab-pane active" id="settings"><div class="col-sm-14">
                <form class="form-horizontal" method="POST" action="userprofile.php" style="zoom:0.80; ">
                  <div class="col-xs-9">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label" >FirstName</label>
                    <div class="col-sm-2" >
                      <input type="text" class="form-control" name="inputName" placeholder="FirstName" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="inputEmail" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="inputEmail" placeholder="email" required >
                    </div>
                  </div>
                  <div class="form-group"  >
                    <label for="inputAge" class="col-sm-2 control-label" >Age</label>

                    <div class="col-sm-2">
                      <input type="number" class="form-control" name="inputAge" placeholder="Age" required>
                    </div>
                    <label for="inputGender" class="col-sm-2 control-label" >Gender</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="inputGender" required>
                    <option>Male</option>
                    <option>Female</option>
                      </select>
                    </div>
                  </div>
                  <br><br>
                    <div class="form-group" >
                    <label for="inputWeight" class="col-sm-2 control-label">Weight</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputWeight" placeholder="Weight" required>
                    </div>
                    <label for="inputHeight" class="col-sm-2 control-label">Height</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputHeight" placeholder="Height" required>
                    </div>
                     <label for="inputMuscle" class="col-sm-2 control-label">Muscle</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputMuscle" placeholder="Muscle" required>
                    </div>
                    </div>
                  <br><br>
                  <div class="form-group" >
                    <label for="inputBMI" class="col-sm-2 control-label">BMI</label>
                    <div class="col-sm-2">
                      <input type="number" class="form-control" name="inputBMI" placeholder="BMI" required>
                    </div>
                    <label for="inputBMR" class="col-sm-2 control-label">BMR</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputBMR" placeholder="BMR" required>
                    </div>
                        <label for="inputVisceralfat" class="col-sm-2 control-label">Visceralfat</label>
                   <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputVisceralfat" placeholder="Visceralfat" required>
                    </div>
                    </div>

                  <div class="form-group" >
                    <label for="inputBodywater" class="col-sm-2 control-label">Bodywater</label>
                   <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputBodywater" placeholder="Bodywater" required>
                    </div>
                      <label for="inputBodyfat" class="col-sm-2 control-label">Bodyfat</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputBodyfat" placeholder="Bodyfat" required>
                    </div>
                    <label for="inputBonemass" class="col-sm-2 control-label">Bonemass</label>
                     <div class="col-sm-2">
                      <input type="text" class="form-control" name="inputBonemass" placeholder="Bonemass" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" required> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" >
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" onclick="mynotify()" class="btn btn-danger" name="profile">Save Changes</button>
                    </div>
                  </div></div>
                </form>
              </div>
              </div>
              <!-- /.tab-pane -->


<div class="tab-pane" id="accset"><div class="col-xs-6">
                <form class="form-horizontal" action="" style="zoom:0.80;"><div class="col-sm-14">
                <div class="col-xs-9">
                  <div class="form-group" >
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail" placeholder="email" >
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="inputPass" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-4">
                      <input type="Password" class="form-control" id="inputPass" placeholder="Password">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group" >
                    <label for="inputNewpass" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-4">
                      <input type="Password" class="form-control" id="inputNewpass" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="inputRenewpass" class="col-sm-2 control-label">Re-type New Password</label>

                    <div class="col-sm-4">
                      <input type="Password" class="form-control" id="inputRenewpass" placeholder="Re-type New Password">
                    </div>
                  </div>
                  <div class="form-group" >
                    <div class="col-sm-offset-2 col-sm-4">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">Terms and Conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                      <button type="submit" class="btn btn-danger" name="save">Save Changes</button>
                    </div>
                  </div></div>
                </form> 

              <!-- /.tab-pane -->

              <!-- <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div> -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 </div></div></div>
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
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="userprofile.php"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bootstrap/js/sabka.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript">
 
function preview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) { $('#img').attr('src', e.target.result);  }
    reader.readAsDataURL(input.files[0]);     }   }

$("#upload").change(function(){
  $("#img").css({top: 0, left: 0});
    preview(this);
    $("#img").draggable({ containment: 'parent',scroll: false });
}); 


</script>
</body>
</html>