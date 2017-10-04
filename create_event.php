<?php  
    include 'scripts/connection.php'; 
    include 'scripts/library.php';
  

  if(isset($_POST['event_submit']))
  {
    $name=$_POST['name'];
    $date=$_POST['event_date'];
    $class=$_POST['class_name'];

    $arrays = array(        
            "Name"    => $name,
            "Date"  => $date,
            "Class" => $class 
        );    
    event_data_store($arrays);
  }
  
  show_events();
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="dist/js/bootstrap.min.js">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


   <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
 
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/event.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="dist/css/bootstrap.min.css">
 </head>
 <body>
  <div id="bodywrap">
  <div class="row">
    <div class="large-5 columns">
      <div class="scroll-window-wrapper" style="margin-left: 20px;">
        <h2>
    Profile Table<br>
    <small></small>
  </h2><div class="w3-container">
  <h2></h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
 
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Create Event</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Event</h2>
      </header>
      <form method="POST">
      <div class="w3-container mb10 mt10 pa20">
        <div class="row">
          <div class="col-md-6">
            <label>Name</label>
          </div>
          <div class="col-md-6">
            <input type="text" name="name" class="form-control" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Date</label>
          </div>
          <div class="col-md-6">
            <input type="datetime-local" name="event_date" class="form-control" required>
          </div>
        </div>
          <div class="row">
          <div class="col-md-6">
            <label>class</label>
          </div>
          <div class="col-md-6">
            <input type="text" name="class_name" class="form-control" required>
          </div>
        </div>
        <div class="text-center">
          <input type="submit" name="event_submit">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
          
<br>
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Date</th> 
    <th>Class</th>
  </tr>
  <tr>
    <td><input type="text" name="FirstName" value=""></td>
    <td><input type="date"  name="LastName" value=""></td>
    <td> <input type="text" name="FirstName" value=""></td>
  </tr>
  <tr>
    <td><input type="text" name="FirstName" value=""></td>
    <td><input type="date" name="LastName" value=""></td>
    <td> <input type="text" name="FirstName" value=""></td>
  </tr>
   <tr>
    <td><input type="text" name="FirstName" value=""></td>
    <td><input type="date"  name="LastName" value=""></td>
    <td> <input type="text" name="FirstName" value=""></td>
  </tr>
</table>

       
      </div>
    </div>
  </div>
</div>


        <div class="scroll-window">
          <table class="table table-striped table-hover user-list fixed-header" >
            <thead>
            <col width="150">
            <col width="150">
            <col width="150">
            <col width="150">
            <col width="150">
            <col width="250">
              <th>
                <div>Profile</div>
              </th>
              <th>
                <div>Name</div>
              </th>
              <th>  
                <div>Salary</div>
              </th>
              <th>
                <div>Age</div>
              </th>
              <th>
                <div> Date</div>
              </th>
              <th></th>
             
            </thead>
            <tbody>
              <tr>
              <td> <img src="C:\Users\iball\Desktop\helfisdash11\assets\img\kid.png" style="width:100px;height:100px;"></td>
                <td>Michael Jones</td>
                <td>8000</td>
                <td>68</td>
                <td>
   
            <div class='col-sm-6' style="padding-right: 0px; padding-left: 0px;">
            <div class="form-group" style="width: 250px; padding-right: 0px;">
              <div id="datetimepicker1" class="input-append date">
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="height: 30px;"></input>
    <span class="add-on" style="height: 30px;">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div></td>
               
                <td class="text-right">
                  <button class="button tiny">View User</button>
                  <button class="button tiny">Delete</button>
                </td>
              </tr>
              <tr>
              <td><img src="C:\Users\iball\Desktop\helfisdash11\assets\img\kid.png" style="width:100px;height:100px;"> </td>
                <td>Michael Jones</td>
                <td>76500</td>
                <td>61</td>
                <td>
   
            <div class='col-sm-6' style="padding-right: 0px; padding-left: 0px;">
            <div class="form-group" style="width: 250px; padding-right: 0px;">
                <div id="datetimepicker2" class="input-append date" >
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="height: 30px;"></input>
    <span class="add-on" style="height:30px;">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar" >
      </i>
    </span>
  </div>
</div></td>
                <td class="text-right"> 
                  <button class="button tiny">View User</button>
                  <button class="button tiny">Delete</button>
                </td>
              </tr>
              <tr>
              <td>  <img src="C:\Users\iball\Desktop\helfisdash11\assets\img\kid.png" style="width:100px;height:100px;"></td>
                <td>Michael Jones</td>
                <td>54370</td>
                <td>63</td>
                <td>
   
            <div class='col-sm-6' style="padding-right: 0px; padding-left: 0px;">
            <div class="form-group" style="width: 250px; padding-right: 0px;">
               
  <div id="datetimepicker3" class="input-append date">
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="height: 30px;"></input>
    <span class="add-on" style="height: 30px;">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>

</td>
                 <td class="text-right">
                  <button class="button tiny">View User</button>
                  <button class="button tiny">Delete</button>
                </td>
              </tr>
              
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

 

</body>
</html>
