<?php require_once 'connection.php'; ?>
<?php require_once 'library.php';?>
<?php require_once 'fun.php'; ?>


<?php
  // select a database
error_reporting(0);
echo getData(session_id());
$db = $m->helfis;
$collection = $db->images;
$fname = getname(session_id());
$key = $collection->findOne(array("FirstName"=>$fname));




print "hello";
   
   if(isset($_FILES['image'])){
      $errors= array();
       echo $file_name = $_FILES['image']['name'];
       echo $file_size =getimagesize($_FILES['image']['size']);
       echo $file_tmp =$_FILES['image']['tmp_name'];
       echo $file_type=$_FILES['image']['type'];
       echo $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
       echo $expensions= array("jpeg","jpg","png");
      
      

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }

      if(empty($errors)==true){
          $values= array(
        "Filename"  =>  $file_name,
        "Filesize"  =>  $file_size, 
        "Tempfile"  =>  $file_tmp,
        "Filetype"  =>  $file_type,
        "Fileext"   =>  $file_ext
);  

  $collection->insert($values);

}
        

   }

?>
