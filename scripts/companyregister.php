<!DOCTYPE html>
<?php
 error_reporting(0);
    require_once 'library.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="icon" href="../dist/img/credit/favicon.png" type="image/png">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>REGISTRATION</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">COMPANY REGISTRATION</p>
    
    <form action="" method="post" id="myForm">
      <div class="form-group has-feedback">
       <input id="field_CompanyName" title="CompanyName must not be blank and contain only letters, numbers and underscores." type="text" required pattern="\w+" name="CompanyName" class="form-control" placeholder="Company Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" id="txtEmail" class="form-control" name="email"  placeholder="Official Email Id"  onclick='Javascript:checkEmail();' required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">

 <input id="field_pass" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pass" placeholder="Password" class="form-control">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <input id="field_cpass" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="cpass" onblur="chk()"  placeholder="Re-enter password" class="form-control">
        
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" name="phone" id="number" placeholder="Phone Number"  required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      
   
 </script>
      <div id="error"></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" required> I agree to the <a href="#">Terms & Conditions</a>
            </label>
          </div>
        </div>
      </div>
      <br>
        <!-- /.col -->
        <div class="row">
        <div class="col-sm-offset-2 col-xs-8 ">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="reg" >Register</button>
        </div>
      </div>
        <!-- /.col -->
      
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->
   <br>
    <a href="login.php" class="text-center">Already have a membership?</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<script src="myscript.js" type="text/javascript"></script>
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.CompanyName.value == "") {
        alert("Error: CompanyName cannot be blank!");
        this.CompanyName.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.CompanyName.value)) {
        alert("Error: CompanyName must contain only letters, numbers and underscores!");
        this.CompanyName.focus();
        e.preventDefault();
        return;
      }
            var val = number.value
    
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    
    alert("Error: Please check that you've number");
        this.number.focus();
        e.preventDefault();
        return;
}
      if(this.pass.value != "" && this.pass.value == this.cpass.value) {
        if(!checkPassword(this.pass.value)) {
          alert("The password you have entered is not valid!");
          this.pass.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pass.focus();
        e.preventDefault();
        return;
      }
      //alert("Both CompanyName and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var CompanyNameInput = document.getElementById("field_CompanyName");
      CompanyNameInput.setCustomValidity(CompanyNameInput.title);

      var passInput = document.getElementById("field_pass");
      passInput.setCustomValidity(passInput.title);

      var cpassInput = document.getElementById("field_cpass");

      // input key handlers

      CompanyNameInput.addEventListener("keyup", function(e) {
        CompanyNameInput.setCustomValidity(this.validity.patternMismatch ? CompanyNameInput.title : "");
      }, false);

      passInput.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? passInput.title : "");
        if(this.checkValidity()) {
          cpassInput.pattern = RegExp.escape(this.value);
          cpassInput.setCustomValidity(cpassInput.title);
        } else {
          cpassInput.pattern = this.pattern;
          cpassInput.setCustomValidity("");
        }
      }, false);

      cpassInput.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? cpassInput.title : "");
      }, false);

    }

  }, false);

</script>
<script language="javascript">

function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    }
    </script>
    <script type="text/javascript">
    function checknumber(){
      var val = number.value
    
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    
    alert("Error: Please check that you've number");
        this.number.focus();
        e.preventDefault();
        return;
}
}
    </script>
</body>
</html>
