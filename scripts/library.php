<?php
 // $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
 // echo "Connected";
    if(!isset($_SESSION)) {
    session_start();
    session_id();
     }


       function register($document){
        global $collection;
        $collection->insert($document);
        return true;
    }
       function booking($key){
        global $collection;
        $collection->insert($key);
        return true;
    }


      


   

    function chkemail($email){
        global $collection;
        $temp = $collection->findOne(array('EmailAddress'=> $email));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }

      function chkname($fname){
        global $collection;
        $temp = $collection->findOne(array('FirstName'=> $fname));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }

    function setsession($email){
     
       
        
        $_SESSION["userLoggedIn"] = 1;
        global $collection;
        $temp = $collection->findOne(array('EmailAddress'=> $email));
        $_SESSION["uname"] = $temp["FirstName"];
        $_SESSION["email"] = $email;
        return true;
        
    }
    function chkLogin(){
        
        //var_dump($_SESSION);
        
        if(isset($_SESSION["userLoggedIn"])){
            return true;
        }
        else{
            return false;
        }
    }
    function removeall(){
        unset($_SESSION["userLoggedIn"]);
        unset($_SESSION["uname"]);
        unset($_SESSION["email"]);
        return true;
    }
   
?>