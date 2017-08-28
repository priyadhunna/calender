<?php require_once '../scripts/connection.php'; ?>
     <?php

$data = "<table class=\"table table-hover table-striped\" id=\"mytable\">
                                    <thead>
                                        <th>NAME</th>
                                        <th>DATE</th>
                                        <th>CLASS</th>
                                    </thead>
                                    <tbody>";
                                                                                 

       
    try{
         $db = $m->helfis;
         $collection = $db->bookingevents;
         $cursor = $collection->find();
        foreach($cursor as $key){
            $data   .= "<tr>";
            $data  .= "<td>" . $key["name"] . "</td>";
            $data .= "<td>" . $key["date"]."</td>";
            $data   .= "<td>" . $key["class"]."</td>";
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