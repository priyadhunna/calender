
<?php 
    require_once 'connection.php'; 
    require_once 'library.php';     
    
    if(chkLogin()){
        header("Location: home.php");
    }
   
   if(isset($_POST['reg'])){
       
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $temp  = $_POST['pass'];
        $value_role=$_POST['Role'];
        $options = array('cost' => 10);
        $pass = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "FirstName"    => $fname,
            "PhoneNumber"  => $phone,
            "EmailAddress" => $email,
            "Password"      => $pass,
            "Role"          => $value_role 
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
                    
            if($value_role==1)
                header("Location: ../admin/index.php");
            elseif($value_role==2)
                header('Location:../company_admin/index.php');
            elseif($value_role==3)
                header("Location:../indexfinal1.php");
            else{
                session_destroy();
                header("Location:login.php");
            }
        }
       else{
        echo "Email already registered!";
           echo"<br>";
        echo "Please <a href='register.php'>Register</a> with another email ID";
       }
    }
 ?>