<?php require_once 'connection.php'; ?>
<?php
$db = $m->helfis;
$collection = $db->images;



$id = addslashes($_REQUEST['id']);
$cursor = $collection->findOne(['id' => $id]);
 foreach($cursor as $document){
 	$image=. $document["$image"] .
  $image=$image['image '];





 
  
    $format = substr( $imageName, -3 ); //gets the last 3 chars of the file name, ex: "photo1.png" gets the ".png" part
    header('content-type: image/' . $format);

echo $image;
}

?>