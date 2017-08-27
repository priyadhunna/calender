
<?php require_once 'connection.php'; ?>
<?php require_once 'library.php';?>
<?php require_once 'fun.php'; ?>


<?php
  // select a database
error_reporting(0);
echo getData(session_id());
$db = $m->helfis;
$collection = $db->calendar;
$fname = getname(session_id());
$key = $collection->findOne(array("FirstName"=>$fname));
$bookingCollection = $db->bookingevents;
$arr = array(          
          "FirstName"=>$fname,
           "title" => $_POST["dataTitle"],
           "class" => $_POST["dataClass"],
            "date" => $_POST["dataDate"]
        );
$bookingCollection->insert($arr);

  ?>
 









 

    
    