<form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>"> 
<p><label for="email">Email:</label> 
<input name="email" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 
<?php

if(isset($_POST['submit'])) 
{ 
$m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
echo "connected!";

$db = $m->selectDB('helfis');

 $collection = $db->myhell;
 echo "Collection selected successfully";

$email = $_POST['email'];

// search for fruits
$cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
     $doc=$document["Email Address"] . "\n";
     echo $doc;
   }


  } 
// search for produce that is sweet. Taste is a child of Details. 
// $emailQuery = array('Email' => '$email');
// echo "Email bhapp\n";
// $cursor = $collection->find($emailQuery);
// foreach ($cursor as $doc) {
//     var_dump($doc);
// }

?>