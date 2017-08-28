
<?php require_once 'connection.php'; ?>
<?php require_once 'library.php';?>
<?php require_once 'fun.php'; ?>


<?php
  // select a database
error_reporting(0);
 echo getData(session_id());

   $db = $m->helfis;
   //echo "Database mydb selected";
   $collection = $db->bookingevents;
   //echo "Collection selected succsessfully";
   $cursor = $collection->find();
    $fname = getname(session_id());
    $key = $collection->findOne(array("FirstName"=>$fname));

   $rewardsCollection = $db->rewards1;

   foreach($cursor as $key)
   {

           
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


  ?>
 









 

    
    