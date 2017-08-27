<?php require_once 'connection.php'; ?>

<?php

$data = "<table class=\"table table-hover table-striped\" id=\"mytable\">
                                    <thead>
                                        <th>RANK</th>
                                        <th>NAME</th>
                                        <th>POINTS</th>
                                    </thead>
                                    <tbody>";
                                                                                 

       
    try{
         $db = $m->helfis;
         $collection = $db->per;
         $cursor = $collection->find();
        foreach($cursor as $document){
            $data   .= "<tr>";
            $data  .= "<td>" . $document["rank"] . "</td>";
            $data .= "<td>" . $document["name"]."</td>";
            $data   .= "<td>" . $document["points"]."</td>";
            $data   .= "</tr>";
        }
        
        $data  .= "</tbody>";
        $data  .= "</table>";
        //echo $data;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>