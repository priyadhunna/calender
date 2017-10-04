<?php   
    require_once 'connection.php'; 
    require_once 'fun.php';
?>

<?php
 error_reporting(0);                                                                       
$i=0;
$db = $m->helfis;
$session= getemail(session_id());
$fname= getname(session_id());
$collection = $db->bookingevents;
$cursor      = $collection->find(array('FirstName'=>$fname));
$cursor      =   $cursor->sort($array);
foreach ($cursor as $key => $value) {
    $dateExplode =   explode('T', $value['date']);
    if(date('Y-m-d')>$dateExplode[0]){
        ++$i;
    }
}
$newCollection  = $db->Points;
$newcursor      = $newCollection->find(array('FirstName'=>$fname));
$newcursorExist =   $newcursor->count();
print $newcursorExist;
if($newcursorExist==0){
    $newCursorValues= array("FirstName"=>$fname,
                            "Total Classes"=>$i,
                            "EmailAddress"=>$session,
                            "Points"=>$i*5
                            );
    $newCursorInsert   =    $newCollection->insert($newCursorValues);
    
}
else{
    $newCursorInsert   =    $newCollection->update(array("FirstName"=>$fname),
                                                   array("EmailAddress"=>$session),
                                                   array('$set'=>array('Points'=>$i*5)),
                                                   array('$set'=>array('Total Classes'=>$i))
                                                   
                                                   );
}
        