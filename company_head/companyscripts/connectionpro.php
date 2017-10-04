<?php
    try{
     $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

    echo "Connected";
     //echo "Connection to database Successfull!";echo"<br />";

    $db = $m->helfis;
    //echo "Databse loginreg selected";
    $collection = $db->dashboard; 
    //echo "Collection userdata Selected Successfully";
    }
    catch (Exception $e){
        die("Error. Couldn't connect to the server. Please Check");
    }
       session_start();
?>