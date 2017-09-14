<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php
     $data = "<table table-striped table-hover table-bordered\"  id=\"editable-sample\">";
    $data .= "<thead>";
    $data .= "<tr>";
    $data .= "<th>NAME OF ROLE</th>";
    $data .= "</tr>";
    $data .= "</thead>";
    $data .= "<tbody>";
 
    try{


         $db = $m->helfis;
         $UserCollection = $db->user_roles_data;
        foreach($cursor as $document){
            $data .= "<tr>";
            $data .= "<td>" . $document["name"] . "</td>";
                        $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
        $UserCollection->insert($document);
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>




















    
 
