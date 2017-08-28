   
<?php require_once 'connection.php'; ?>
<?php require_once 'library.php';?>
<?php require_once 'fun.php'; ?>
<?php
     
    //  function chkLogin(){
        
    //     //var_dump($_SESSION);
        
    //     if(isset($_SESSION["userLoggedIn"])){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }
    
    if(chkLogin()){
        header("Location: calendar.php");
    }

 ?>

<?php
  // select a database
error_reporting(0);
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
        $arrays = array(
         
          
          "FirstName"=>$fname,
           "name" => $key["name"],
           "class" => $key["class"],
            "date" => $key["date"]


        );
         $query = chkname($fname);
        if($query){
            booking($arrays);

            session_start();
            session_regenerate_id();

             $arre = array(
                          "FirstName"     => $fname,
                          "SessionID" => session_id()


                        );
        














   $db = $m->helfis;
   //echo "Database mydb selected";
   $collection = $db->calendar;
   //echo "Collection selected succsessfully";
   $cursor = $collection->find();
    $fname = getname(session_id());
    $key = $collection->findOne(array("FirstName"=>$fname));

   $bookingCollection = $db->bookingevents;
    

   
        $bookingCollection->insert($arr);
   
             header("Location: ../indexfinal1.php");
            }
       else{
        echo "Event already registered!";
           echo"<br>";
        echo "Please <a href='calendar.php'>Booking</a> with another name";
       }
 }
    



  ?>



 




 

    
    