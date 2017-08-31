<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
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
        header("Location: home.php");
    }

 ?>
<?php  echo session_id();  ?>
 <?php
   
   if(isset($_POST['reg'])){
       
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $temp  = $_POST['pass'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "FirstName"    => $fname,
            "PhoneNumber"  => $phone,
            "EmailAddress" => $email,
            "Password"      => $pass
        
        );
      
        $query = chkemail($email);
        if($query){
            register($arrays);

            session_start();
            session_regenerate_id();

             $arre = array(
                          "Email"     => $email,
                          "SessionID" => session_id()


                        );                     
                         $db = $m->helfis;
                        //echo "Databse loginreg selected";
                        $collection = $db->login; 
                        //echo "Collection userdata Selected Successfully";
                        $collection->insert($arre);
                       // echo "Document inserted successfully";

            header("Location: ../indexfinal1.php");
            }
       else{
        echo "Email already registered!";
           echo"<br>";
        echo "Please <a href='register.php'>Register</a> with another email ID";
       }
 }
       
 ?>