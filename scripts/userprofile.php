
   <?php 
error_reporting(0);
   require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>

<?php  echo session_id();  ?>



  <?php
  
   if(isset($_POST['profile'])){
       
        $fname        = $_POST['inputName'];
        $email        = $_POST['inputEmail'];
       
        $age          = $_POST['inputAge'];
        $gender       = $_POST['inputGender'];
        $weight       = $_POST['inputWeight'];
        $height       = $_POST['inputHeight'];
        $bmi          = $_POST['inputBMI'];
        $bmr          = $_POST['inputBMR'];
        $bodywater    = $_POST['inputBodywater'];
        $bodyfat      = $_POST['inputBodyfat'];
        $bonemass     = $_POST['inputBonemass'];
        $muscle       = $_POST['inputMuscle'];
        $visceralfat  = $_POST['inputVisceralfat'];
        
        $arrays = array(
            
            "FirstName"     => $fname,
            "Email Address" => $email,
            
            "age"           => $age, 
            "Gender"        => $gender,
            "weight"        => $weight,       
            "height"        => $height,
            "bmi"           => $bmi,
            "bmr"           => $bmr,
            "bodywater"     => $bodywater,
            "bodyfat"       => $bodyfat,
            "bonemass"      => $bonemass,
            "muscle"        => $muscle ,
            "visceralfat"   => $visceralfat,
        );
        
      

         $db = $m->helfis;
                        //echo "Databse loginreg selected";
                        $collection = $db->assessme; 
                        //echo "Collection userdata Selected Successfully";
                        $collection->insert($arrays);
                       // echo "Document inserted successfully";
        echo "Document inserted successfully";
        header("Location: ../indexfinal1.php");    
       
       
       
 }
















       echo "priya";
 ?>