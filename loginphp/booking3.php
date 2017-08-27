   
<?php require_once 'connection.php'; ?>
<?php require_once 'library.php';?>
<?php require_once 'fun.php'; ?>


<?php
  // select a database
error_reporting(0);
 echo getData(session_id());

   $db = $m->helfis;
   //echo "Database mydb selected";
   $collection = $db->calendar;
   //echo "Collection selected succsessfully";
   $cursor = $collection->find();
    $fname = getname(session_id());
    $key = $collection->findOne(array("FirstName"=>$fname));

   $bookingCollection = $db->bookingevents;

   foreach($cursor as $key) {
    echo getData(session_id());
    echo "i am here";
     print_r($_POST);
     echo ($_POST['book']);
       if(isset($_POST['book'])){
       
        $fname = $_POST['FirstName'];
        $key["name"]= $_POST['name'];
        $key["date"]= $_POST['date'];
        $key["class"]= $_POST['class'];

         
           
        //prepare data
        $arr = array(
         
          
          "FirstName"=>$fname,
           "name" => $key["name"],
           "class" => $key["class"],
            "date" => $key["date"]


        );

        //insert data
        $bookingCollection->insert($arr);
   }
 }


  ?>



 




 

    
    