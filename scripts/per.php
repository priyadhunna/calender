<?php   require_once 'connection.php'; 
        require_once 'fun.php';
?>

<?php
                                                                        
$i=0;
$db = $m->helfis;
$fname= getname(session_id());
$collection = $db->bookingevents;
$cursor      = $collection->find(array('FirstName'=>$fname));
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
                            "Points"=>$i
                            );
    $newCursorInsert   =    $newCollection->insert($newCursorValues);
    
}
else{
    $newCursorInsert   =    $newCollection->update(array("FirstName"=>$fname),
                                                   array('$set'=>array('Points'=>$i))
                                                   );
}
        