<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php    
    try{
         $db = $m->helfis;
         $collection = $db->bookingevents;
            $fname = getname(session_id());
            $nameQuery =  array('FirstName' => $fname );
            $cursor = $collection->count($nameQuery);
            $rewards = "<ul class=\"nav nav-stacked\">
                <li><a href=\"#\">Points Accumulated<span class=\"pull-right badge bg-blue\">" .$cursor*5 .
                "</span></a></li>
                <li><a href=\"#\">Charity<span class=\"pull-right badge bg-aqua\">" . floatval(($cursor*5)/10) . "</span></a></li>                
              </ul>";
 
    }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>
