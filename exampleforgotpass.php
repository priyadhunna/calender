<form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>"> 
<p><label for="email">Email:</label> 
<input name="email" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 

<?php 
if(isset($_POST['submit'])) 
{ 
 $m = new MongoClient("mongodb://helfishelfishelfis:dadadadada@ds127962.mlab.com:27962/helfis");

 echo "Connected"; 

$email = $_POST['email']; 

$sdb= db.helfis_user_profiles.aggregate({$group:{"Password":"1"}},{$match:{"Email":"email"}}); 
$query = mysql_query($sql); 
if(!$query)  
    { 
    die(mysql_error()); 
    } 
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$password=$row["password"]; 
$email=$row["email"]; 
$subject="Password Change Request"; 
$header="From: shashwat1196@gmail.com"; 
$content="Your password is ".$password; 
mail($email, $subject, $content, $header);  
print "An email containing the password has been sent to you"; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 
} 
?>