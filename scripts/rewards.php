<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php    
error_reporting(0);
    try{
         $db = $m->helfis;
         $collection = $db->bookingevents;
            $fname = getname(session_id());
            $nameQuery =  array('FirstName' => $fname );
            $cursor = $collection->count($nameQuery);
            $PointsCollection = $db->Points;
            $rewards = "<ul class=\"nav nav-stacked\">
                <li><a href=\"#\">Points Accumulated<span class=\"pull-right badge bg-blue\">" .$cursor*5 .
                "</span></a></li>
                <li><a href=\"#\">Charity<span class=\"pull-right badge bg-aqua\">" . floatval(($cursor*5)/10) . "</span></a></li>                
              </ul>";
              $PointsCollection->insert($rewards);

 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>
