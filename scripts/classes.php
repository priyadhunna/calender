<?php require_once 'connection.php'; ?>
<?php require_once 'fun.php'; ?>
     <?php
  getData(session_id());
$data = "<table class=\"table table-hover table-striped\" id=\"mytable\">
                                    <thead>
                                        <th>NAME</th>
                                        <th>NAME</th>
                                        <th>DATE</th>
                                        <th>CLASS</th>
                                    </thead>
                                    <tbody>";
                                                                                 

       
    try{
         $db = $m->helfis;
         $collection = $db->bookingevents;
          $fname = getname(session_id());
         //echo 'echo';
         //echo session_id();
         $document = $collection->findOne(array("FirstName"=>$fname));
         $cursor = $collection->find();
        foreach($cursor as $document){
            $data   .= "<tr>";
            $data  .= "<td>" . $document["FirstName"] . "</td>";
            $data  .= "<td>" . $document["name"] . "</td>";
            $data .= "<td>" . $document["date"]."</td>";
            $data   .= "<td>" . $document["class"]."</td>";
            $data   .= "</tr>";
        }
        
        $data  .= "</tbody>";
        $data  .= "</table>";
        echo $data;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>