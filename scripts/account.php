
   <?php 
error_reporting(0);
   require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>

<?php  echo session_id();  ?>



  <?php
  
   if(isset($_POST['save'])){
       
      
        $email          = $_POST['inputEmail'];
        $Password       = $_POST['inputPass'];
        $NewPassword    = $_POST['inputNewpass'];
        $ReNewPassword  = $_POST['inputRenewpass'];
            
        $arr1 = array(
            
           
            "Email"         =>  $email,
            "Pass"          =>  $Password, 
            "NewPass"       =>  $NewPassword ,
            "ReNewPass"     =>  $ReNewPassword,       
          
        );
        
      

         $db = $m->helfis;
                        //echo "Databse loginreg selected";
                        $collection = $db->UpdatePassword; 
                        //echo "Collection userdata Selected Successfully";
                        $collection->insert($arr1);
                       // echo "Document inserted successfully";
        echo "Document inserted successfully";
        header("Location: ../indexfinal1.php");    
       
       
       echo "priya";
 ?>
       

 <html>
<div class="tab-pane" id="accset">
                <form class="form-horizontal" action="account.php">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="email" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPass" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="inputPass" placeholder="Password">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputNewpass" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="inputNewpass" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputRenewpass" class="col-sm-2 control-label">Re-type New Password</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="inputRenewpass" placeholder="Re-type New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">Terms and Conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger" name="save">Save Changes</button>
                    </div>
                  </div>
                </form> 
                </div>
                </html>



















