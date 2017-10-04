<?php

       function register($document){
        global $collection;
        $collection->insert($document);
        return true;
    }



    function event_data_store($event){
        $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
        $db = $m->helfis;
        $collection = $db->bookingevents; 
        $collection->insert($event);
    }

    function show_events(){
        $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
        $db = $m->helfis;
        $collection = $db->bookingevents;
        $cursor = $collection->find();
        foreach ( $cursor as $id => $value )
        {
            echo "$id: ";
            var_dump( $value );
        }
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
    function get_role($role){
        
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