<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php require_once 'fun.php'; ?>
<?php
 error_reporting(0);
$diet = "<table class=\"table table-bordered table-hover\" id=\"example2\">
                                    <thead>
                                       <th>Name</th>
                                       <th>Points</th>
                                       <th>Total Classes</th>
                                    </thead>
                                    <tbody>";
                                                                                 
       try{
         $db = $m->helfis;
         $collection = $db->Points;
         $cursor = $collection->find(array('EmailAddress'=> array('$regex' => '@gmail.com')));
         
            foreach($cursor as $document){
            $diet   .= "<tr>";
            $diet  .= "<td>" . $document["FirstName"] . "</td>";
            $diet  .= "<td>" . $document["Points"] . "</td>";
            $diet  .= "<td>" . $document["Total Classes"] . "</td>";
            $diet   .= "</tr>";
        }
        
        $diet  .= "</tbody>";
        $diet  .= "</table>";
        echo $diet;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>
    