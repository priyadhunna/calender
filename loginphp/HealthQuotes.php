<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
<?php

 try{
         
          function quoter(){
          	
          	$m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
          		$db = $m->helfis;
          		$collection = $db->HealthQuotes;
	          	$cursor = $collection->findOne(['number' => strval(rand(1,8))]);
	          	
	          	return $cursor["quote"] == null ? quoter() : '<p>'. $cursor["quote"].'</p>' . '<cite title="Source Title">'. $cursor["author"].'</cite>';
		        //echo $quotes;

	          // } else {
	          // 	echo "calling again!";
	          // 	quoter();
	          // }
      	  }
      	  //echo quoter();






      // echo HealthQuotes;
      // // rand() . "<br>";

    // echo rand(
                
    //             $quotes .='<cite title="Source Title">'. $document["author"].'</cite>'
    //         );























         // function one()   { 
   //         $quotes .='<p>'. $document["quote"].'</p>';
//$quotes .='<cite title="Source Title">'. $document["author"].'</cite>';
//         echo 'ONE'; 
//          }
// // // function two()   { echo 'TWO'; }
// // // function three() { echo 'THREE'; }

// // // $functions = quote('one', 'two', 'three');
// 		 one();//call_user_func($functions[quote_rand($functions)]);

 


// 



}
catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
?>