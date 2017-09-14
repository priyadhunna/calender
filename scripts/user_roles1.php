<?php require_once 'connection.php'; ?>
<?php require_once 'user_roles_data.php'; ?>

<html>
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
<!--main content start-->
<!-- page start-->
<section class="panel">
  <header class="panel-heading">
    
  </header>
  <div class="panel-body">
    <div class="adv-table editable-table ">
      <div class="clearfix">
        <div class="btn-group">
          <button id="editable-sample_new" class="btn green">
                                      Add Roles
<i class="fa fa-plus"></i>
                                  </button>
        </div>
        <div class="btn-group pull-right">
          <button class="btn dropdown-toggle" data-toggle="dropdown">Rights<i class="fa fa-angle-down"></i>
                                  </button>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Helfis Admin</a></li>
            <li><a href="#">Company Admin</a></li>
            <li><a href="#">Super Admin</a></li>
          </ul>
        </div>
      </div>
      <div class="space15"></div>

      <div class="table-responsive">

        <table class="table table-striped table-hover table-bordered" id="editable-sample">
          <thead>
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
</section>
<!-- page end-->
<script type="text/javascript">
   jQuery(document).ready(function() {
              EditableTable.init();
          });
</script>
         
     