<?php
    header("Cache-Control: no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Fri, 4 Jun 2010 12:00:00 GMT");
    // try{
    // var $m;
    // var $db;
    // var $collection1;
    // var $collection2;
    //  $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    // echo "Connected";
    //  //echo "Connection to database Successfull!";echo"<br />";

    // $db = $m->helfis;
    // //echo "Databse loginreg selected";
    // $collection1 = $db->login;
    // $collection2 = $db->helfis_user_profiles;
    // //echo "Collection userdata Selected Successfully";
    // }
    // catch (Exception $e){
    //     die("Error. Couldn't connect to the server. Please Check");
    // }

    $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->helfis_user_profiles;

     function getData($sessionn) {

         $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->helfis_user_profiles;


    //echo $collection2->findOne(array("Email" => getemail($session)))["First Name"];
   
       $email = getemail($sessionn);
       //$em = strval($email);
        echo $collection2->findOne(array("EmailAddress" => $email))["FirstName"];
       
     }



    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->helfis_user_profiles;

     function getpassword($sessionn) {

         $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->helfis_user_profiles;


    //echo $collection2->findOne(array("Email" => getemail($session)))["First Name"];
   
       $email = getemail($sessionn);
       //$em = strval($email);
        echo $collection2->findOne(array("EmailAddress" => $email))["Password"];
       
     }




















     
    function getemail($session){

        $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->helfis_user_profiles;
    
    
  // echo $collection1->findOne(array("SessionID" => $session))["Email"];
return $collection1->findOne(array("SessionID" => $session))["Email"];
}
       
    






    
  
       
    
         function getname($sessionn) {

         $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection2 = $db->helfis_user_profiles;
     $collection1 = $db->login;
    $collection = $db->assessme;


    //echo $collection2->findOne(array("Email" => getemail($session)))["First Name"];
   
       $fname = getemail($sessionn);  
       //$em = strval($email);
        //echo $collection2->findOne(array("EmailAddress" => $fname))["FirstName"];
        return $collection2->findOne(array("EmailAddress" => $fname))["FirstName"];
       
     }
   
      
   
  




   

