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
    // $collection2 = $db->myhell;
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
    $collection2 = $db->myhell;

     function getData($sessionn) {

         $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->myhell;

    //echo $collection2->findOne(array("Email" => getemail($session)))["First Name"];
   
       $email = getemail($sessionn);
       //$em = strval($email);
        echo $collection2->findOne(array("EmailAddress" => $email))["FirstName"];
       
     }
     
   	function getemail($session){

        $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection1 = $db->login;
    $collection2 = $db->myhell;
    
    
   return $collection1->findOne(array("SessionID" => $session))["Email"];
    //echo $collection2->findOne(array("Email" => getemail($session)))[""]
       
    }
   
?>
