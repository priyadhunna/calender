<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php

                                                                     

       
    try{
         $db = $m->helfis;
         $collection = $db->rewards;
         $cursor = $collection->find();
        foreach($cursor as $document){
            $rewards = "<ul class=\"nav nav-stacked\">
                <li><a href=\"#\">Points Accumulated<span class=\"pull-right badge bg-blue\">" . $document["Points Accumulated"] .
                "</span></a></li>
                <li><a href=\"#\">Charity<span class=\"pull-right badge bg-aqua\">" . $document["Charity"] . "</span></a></li>                
              </ul>";
            
        }
        
      
        //echo $rewards;
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>
