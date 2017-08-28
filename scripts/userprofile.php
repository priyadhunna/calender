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
    
?>



 <?php 

   if(isset($_POST['profile'])){
       
        $fname = $_POST['inputName'];
       
        $age    = $_POST['inputAge'];
        $gender = $_POST['inputGender'];
        $weight = $_POST['inputWeight'];
        $height = $_POST['inputHeight'];
        $bmi    = $_POST['inputBMI'];
        $mother = $_POST['inputMother'];
        $father = $_POST['inputFather'];
        $status = $_POST['inputStat'];
        $child  = $_POST['inputChild'];
        // $temp  = $_POST['pass'];
        // $options = array('cost' => 10);
        // $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
      
        $arrays = array(
            
            "First Name"    => $fname,
            
            "Age"           => $age, 
            "Gender"        => $gender,
            "Weight"        => $weight,       
            "Height"        => $height,
            "BMI"           => $bmi,
            "Mother"        => $mother,
            "Father"        => $father,
            "Status"        => $status,
            "Children"      => $child
        );
        
      

        $collection->insert($arrays);
        echo "Document inserted successfully";
        header("Location: ../indexfinal.html");    
       
       
       
 }
       echo "shashwat";
 ?>