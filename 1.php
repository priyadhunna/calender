<?php require_once 'connection.php'; ?>
<?php

 try{
         $db = $m->helfis;
          $collection = $db->HealthQuotes;
          $cursor = $collection->find();
         function one()   { 
              $quotes ='<p>'. $document["quote"].'</p>';
              $quotes ='<cite title="Source Title">'. $document["author"].'</cite>';
        echo 'ONE'; 
         }
// // function two()   { echo 'TWO'; }
// // function three() { echo 'THREE'; }

// // $functions = array('one', 'two', 'three');
// // call_user_func($functions[array_rand($functions)]);

 




?>