<?php error_reporting(0);?>
<?php require_once 'connection.php';?> 
<?php require_once 'user_roles_data.php';?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/bootstrap.min.css">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/DT_bootstrap.css">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/184766/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="user_roles.css">
<script src="jquery.js"></script>
<script src="jquery-ui-1.9.2.custom.min.js"></script>
<script src="jquery.nicescroll.js"></script>
<script src="bootstrap.min.js"></script>
<script src="jquery.dataTables.js "></script>
<script src="DT_bootstrap.js "></script>
<script src="jquery-migrate-1.2.1.min.js "></script>
<script src="respond.min.js "></script>
<script src="editable-table.js"></script>
</head>
<!--main content start-->
<!-- page start-->
<body style="background-color: #d2d6de">
<div style="background: #fff;
  padding: 20px;
  border-top: 0;
  width: 850;
  margin-left: 350;
  margin-top: 160px;
  height: 550px;
  

  color: #666;">
  <header class="panel-heading">
    
  </header>
  <div class="panel-body" style="height:300px; width:800px; margin-left:0px;">
    <div class="adv-table editable-table ">
      <div class="clearfix">
        <div class="btn-group">
          <button id="editable-sample_new" class="btn green" style="width:170px; background-color: #3c8dbc; color:white;">
                                      Add Roles
<i class="fa fa-plus"></i>
                                  </button>
        </div>
        <div class="btn-group pull-right" style="background-color: #3c8dbc; color:white; margin-right:20px;">
          <button class="btn dropdown-toggle" data-toggle="dropdown" style="color:white; background-color: #3c8dbc; ">Rights<i class="fa fa-angle-down" style="width:95px; text-align:right;color:white; background-color: #3c8dbc; "></i>
                                  </button>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Helfis Admin</a></li>
            <li><a href="#">Company Admin</a></li>
            <li><a href="#">Super Admin</a></li>
          </ul>
        </div>
      </div>
      

      <div class="table-responsive">

<div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid" style="width:750;">

        <table class="table table-striped table-hover table-bordered" id="editable-sample">
          <thead  >
            <tr>
             <th>NAME OF ROLE</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>
          </table>

      </div>
    </div>
  </div>
  </div>

<!-- page end-->
<script type="text/javascript">
   jQuery(document).ready(function() {
              EditableTable.init();
          });
</script></div>
</body>
</html>
         
     