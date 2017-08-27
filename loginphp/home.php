<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php


  // $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
  // echo "Connected";
    require_once 'library.php';
    if(chkLogin()){
       echo session_id();
        echo "Logged in!";
        // $name = $_SESSION["fname"];
        // echo "Welcome !!!";
        
        header("Locaton: ../indexfinal1.php");
    }
    else{
        header("Location: ../pages/examples/login.php");
    }

    if(isset($_POST['logout'])){
        
        $var = removeall();
        if($var){

            $ses = session_id();
             $db = $m->helfis;
             //echo "Databse loginreg selected";
            $collection = $db->login; 
             //echo "Collection userdata Selected Successfully";
            $collection->remove(array("SessionID" => $ses));
            //echo "Documents deleted successfully";
            header("Location: ../pages/examples/login.php");
            session_regenerate_id();
        }
        else{
            echo "Error!";
        }
    
    }
?>
<html>
    <body>
        <form method="post" action="">
            <input type="submit" name="logout" value="Logout!">
        </form>
    </body>
</html>
