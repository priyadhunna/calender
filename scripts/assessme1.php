<?php require_once 'connection.php'; ?>
<?php require_once 'fun.php'; ?>

<?php
$assess="<table id=\"myTable\">";

 //echo getData(session_id());
 //echo 'echo';
try{

         $db = $m->helfis;
         $collection = $db->assessme;
         
         //echo 'echo';
         //echo session_id();
         $document = $collection->findOne(array("FirstName"=>"ruhi"));
          $assess.="<tr>";

        if($document["age"]>=21&& $document["age"]<=40)   
      {

       if($document["bmi"]<50)
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmigreen.png\" height=\"50\" width=\"50\"></center><br><center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";



 }
 else
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmi orange.png\" height=\"50\" width=\"50\"></center><br>
     <center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";

     }







        if($document["bmr"]<=50)
   { 

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";
 }
 else
 {

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";

 }





  
        if($document["bodyfat"]<=50)
   { 
  $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";

  }
  else
  {
    $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";
}



  
        if($document["bodywater"]<=50)
   { 

 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywatergreen.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";

}

else
{
 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywater orange.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";


}
  $assess.="</tr>";


  
    
   $assess.="<tr>";
    if($document["bonemass"]<=50)
    {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";

    }
    else
    {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";
     
     }


      if($document["muscle"]<=50)
      {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }
       else
       {

      $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }



        if($document["weight"]<=50)
        {

 $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weightgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center><big></big></td>"; 

       }
       else
       {
         $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weight orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center> 

<big></big></td>"; 

       }



      if($document["visceralfat"]<=50)

      {
$assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfatgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";

     }
     else
     {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfat orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";
   
    }
$assess.="</tr>";
}

      elseif($document["age"]>=41&& $document["age"]<=60)
 {
       if($document["bmi"]<50)
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmigreen.png\" height=\"50\" width=\"50\"></center><br><center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";



 }
 else
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmi orange.png\" height=\"50\" width=\"50\"></center><br>
     <center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";

     }







        if($document["bmr"]>=50)
   { 

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";
 }
 else
 {

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";

 }





  
        if($document["bodyfat"]<=50)
   { 
  $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";

  }
  else
  {
    $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";
}



  
        if($document["bodywater"]<=50)
   { 

 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywatergreen.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";

}

else
{
 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywater orange.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";


}
  $assess.="</tr>";


  
    
   $assess.="<tr>";
    if($document["bonemass"]>=50)
    {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";

    }
    else
    {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";
     
     }


      if($document["muscle"]>=50)
      {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }
       else
       {

      $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }



        if($document["weight"]>=50)
        {

 $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weightgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center><big></big></td>"; 

       }
       else
       {
         $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weight orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center> 

<big></big></td>"; 

       }



      if($document["visceralfat"]<=50)

      {
$assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfatgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";

     }
     else
     {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfat orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";
   
    }

$assess.="</tr>";
}
      elseif($document["age"]>=1&& $document["age"]<=20)
 {
       if($document["bmi"]<50)
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmigreen.png\" height=\"50\" width=\"50\"></center><br><center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";



 }
 else
   { 

     $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bmi orange.png\" height=\"50\" width=\"50\"></center><br>
     <center> 

     <input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " '></center><big></big> </td>";

     }







        if($document["bmr"]>=50)
   { 

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";
 }
 else
 {

          $assess.="<td height=\"170\" width=\"200\"><center><img  src=\"../icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " '> </center>

<big><br></big><font size=\"500\"> </td>";

 }





  
        if($document["bodyfat"]<=50)
   { 
  $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";

  }
  else
  {
    $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' ></center><big></big> </td>";
}



  
        if($document["bodywater"]<=50)
   { 

 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywatergreen.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";

}

else
{
 $assess.="<td height=\"170\" width=\"200\" ><center><img src=\"../icons/bodywater orange.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' ></center><big></big> </td>";


}
  $assess.="</tr>";


  
    
   $assess.="<tr>";
    if($document["bonemass"]>=50)
    {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";

    }
    else
    {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '></center><big></big></td>";
     
     }


      if($document["muscle"]>=50)
      {
     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }
       else
       {

      $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " '> </center><big></big></td>";
       }



        if($document["weight"]>=50)
        {

 $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weightgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center><big></big></td>"; 

       }
       else
       {
         $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/weight orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' ></center> 

<big></big></td>"; 

       }



      if($document["visceralfat"]<=50)

      {
$assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfatgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";

     }
     else
     {

     $assess.="<td height=\"170\" width=\"200\"><center><img src=\"../icons/visceralfat orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " '></center> 

<big></big></td>";
   
    }

$assess.="</tr>";
}









echo $assess;
 }catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
    ?>