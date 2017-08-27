<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php
 $data  = "<table style='border:1px solid red;";
    $data .= "border-collapse:collapse' border='1px'>";
    $data .= "<thead>";
    $data .= "<tr>";
    $data .= "<th>Name</th>";
    $data .= "<th>Age</th>";
    $data .= "<th>Course</th>";
    $data .= "<th>Marks</th>";
    $data .= "</tr>";
    $data .= "</thead>";
    $data .= "<tbody>";
 
    try{
         $db = $m->helfis;
         $collection = $db->DietPlan;
         $cursor = $collection->find();
        foreach($cursor as $document){
            $data .= "<tr>";
            $data .= "<td>" . $document["name"] . "</td>";
            $data .= "<td>" . $document["age"]."</td>";
            $data .= "<td>" . $document["course"]."</td>";
            $data .= "<td>" . $document["marks"]."</td>";
            $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
        echo $data;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>




















    ?>
 
