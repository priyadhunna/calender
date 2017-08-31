
   <?php 
error_reporting(0);
   require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>

<?php  echo session_id();  ?>



  <?php
  
   if(isset($_POST['profile'])){
       
        $fname = $_POST['inputName'];
        $email = $_POST['inputemail'];
       
        $age    = $_POST['inputAge'];
        $gender = $_POST['inputGender'];
        $weight = $_POST['inputWeight'];
        $height = $_POST['inputHeight'];
        $bmi    = $_POST['inputBMI'];
        $mother = $_POST['inputMother'];
        $father = $_POST['inputFather'];
        $status = $_POST['inputStat'];
        $child  = $_POST['inputChild'];
         $temp  = $_POST['pass'];
         $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
      
        $arrays = array(
            
            "First Name"    => $fname,
            "Email"         => $email,
            
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
        
      

         $db = $m->helfis;
                        //echo "Databse loginreg selected";
                        $collection = $db->Profile; 
                        //echo "Collection userdata Selected Successfully";
                        $collection->insert($arrays);
                       // echo "Document inserted successfully";
        echo "Document inserted successfully";
        header("Location: ../indexfinal1.php");    
       
       
       
 }
















       echo "priya";
 ?>