
<?php require_once 'connection.php'; ?>

<?php

 try{
         
          function getAnalysis(){
          	
          	$m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");
          		$db = $m->helfis;
          		$collection = $db->Analysis;
	          	$cursor = $collection->findOne(['name' => "piya"]);
	          	
	          	$return = " <script>

      $(document).ready(function(){
        var ctx = $(\"#mycanvas\").get(0).getContext(\"2d\");

        //pie chart data
        //sum of values = 360
        var data = [
          {
            value:" .  $cursor["dance"] . ",
            color: \"cornflowerblue\",
            highlight: \"lightskyblue\",
            label: \"Dance\"
          },
          {
            value:" .  $cursor["music"] . ",
            color: \"lightgreen\",
            highlight: \"yellowgreen\",
            label: \"Music\"
          },
          {
            value:" .  $cursor["class"] . ",
            color: \"orange\",
            highlight: \"darkorange\",
            label: \"Yoga\"
          }
        ];

        //draw
        var piechart = new Chart(ctx).Pie(data);
      }); </script>

    " ;
    echo $return;
      	  }
      	 

}
catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
?>






 
