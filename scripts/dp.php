<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php

$diet = "<table class=\"table table-hover table-striped\" id=\"mytable\">
                                    <thead>
                                        <th>Day</th>
                                        <th>Breakfast</th>
                                        <th>Lunch</th>
                                        <th>Dinner</th>
                                    </thead>
                                    <tbody>";
                                                                                 

       
    try{
         $db = $m->helfis;
         $collection = $db->dp;
         $cursor = $collection->find();
        foreach($cursor as $document){
            $diet   .= "<tr>";
            $diet  .= "<td>" . $document["day"] . "</td>";
            $diet .= "<td>" . $document["breakfast"]."</td>";
            $diet   .= "<td>" . $document["lunch"]."</td>";
            $diet   .= "<td>" . $document["dinner"]."</td>";
            $diet   .= "</tr>";
        }
        
        $diet  .= "</tbody>";
        $diet  .= "</table>";
        //echo $diet;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>
