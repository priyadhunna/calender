 <?php require_once 'connection.php'; ?>
<?php require_once 'fun.php'; ?>
 <?php

  try{
         $db = $m->helfis;
         $collection = $db->bookingevents;
         $fname = getname(session_id());
         $cursor = $collection->find(array("FirstName"=>$fname));
         // print_r($cursor);
        foreach($cursor as $document){
          
                 print_r($document);
                  

                    
  // $classes='<div class="row">';
  //                   $classes='<div class="modal-body">';
  //         $classes='<div class="box-body">';
  //         $classes='<div class="box box-widget widget-user-2">';
  //           //<!-- Add the bg color to the header using any of the bg-* classes -->
  //           $classes='<div class="widget-user-header bg-blue">';
            
       
  //             $classes='<div class="row">';
  //               $classes='<div class="col-sm-4 border-right">';
  //                $classes=' <div class="description-block">';
  //                  echo '<h5 class=\"description-header\">TIME</h5>';
  //                  echo '<span class=\"description-text\">'.$document["class"].'</span>';


                    
  //                 $classes='</div>';
  //                 //<!-- /.description-block -->
  //              $classes=' </div>';
  //               //<!-- /.col -->
  //               $classes='<div class="col-sm-4 border-right">';
  //                $classes=' <div class="description-block">';
  //                   echo'<h5 class=\"description-header\">DATE</h5>';
  //                 echo '<span class=\"description-text\">'.$document["name"].'</span>';


  //                $classes=' </div>';
  //                 //<!-- /.description-block -->
  //               $classes='</div>';
  //               //<!-- /.col -->
  //               $classes='<div class="col-sm-4">';
  //                 $classes='<div class="description-block">';
  //                     echo'<h5 class=\"description-header\">CLASS</h5>';
  //                   echo '<span class=\"description-text\">'.$document["class"].'</span>';

  //                $classes=' </div>';
  //                // <!-- /.description-block -->
  //               $classes='</div>';
  //               //<!-- /.col -->
  //             $classes='</div>';
  //             //<!-- /.row -->
  //           $classes='</div>';
  //         //<!-- /.widget-user -->
  //       $classes='</div>';
  //       $classes='</div>';
        


                  }
        
  //            echo $classes;
 
    }
    catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>