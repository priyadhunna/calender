<?php
     $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
    $db = $m->helfis;
    $collection = $db->user_regsitered; 
    session_start();
     
?>