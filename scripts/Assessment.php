<?php
 error_reporting(0);
    require_once 'library.php';
    if(chkLogin()){
        header("Location: home.php");
    }
?>
<html>
<head>
<meta charset="utf-200">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=50, maximum-scale=50, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="Assessment.css">
  <!-- Bootstrap 3.3.6 -->
 
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <!-- Ionicons -->
 

  <script src="jquery-2.1.4.min.js"></script>
  <script src="Assessment.js"></script>
   
<!-- multistep form -->
<form id="msform">
  <div class="form">
  <p class="subText">
  <!-- progressbar -->

<div id="Progressbar" style="height:150px;width:120%">
<ul>
  <li><center>1</center></li>
  <li><center>2</center></li>
  <li><center>3</center></li>
  <li><center>4</center></li>
  <li><center>5</center></li>
  <li><center>6</center></li>
  <li><center>7</center></li>
  <li><center>8</center></li>
  <li><center>9</center></li>
  <li><center>10</center></li>
</ul>

</div>







 <form action="" name="msform">
  <form name="msform" action="/action_page_post.php"
onnext="return validateForm()" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title"><center>ASSESSMENT FORM</center></h2>
    <h3 class="fs-subtitle">This is step 1</h3>
   
    
    
   <div> <input type="text" name="name" placeholder="Name*" class="inputValidation" required/>
    <input type="text" name="gender" placeholder="gender*" class="inputValidation" validate="required"/>
    <input id="date" type="date" name="dob" placeholder="Date of Birth*" class="inputValidation" value="2017-06-01"/>
    <input type="email" name="email" placeholder="Email*" class="inputValidation" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"/>
    <input type="number" name="no" placeholder="Contact no*" class="inputValidation" />
    <textarea name="address" placeholder="Address*" class="inputValidation" validate="required"></textarea></div>
    
    <input type="button" name="next" class="next action-button" value="Next" />


  </fieldset>


  <fieldset>
    <h2 class="fs-title">2</h2>
    <h3 class="fs-subtitle">This is step 2</h3>
    <input type="text" name="height" placeholder="Height(in cms)" required="true" />
    <input type="text" name="weight" placeholder="Weight(in kg)" />
    <input type="text" name="blood group" placeholder="Blood Group" />
    
<br>
 <label>Lifestyle</label>
                    <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
                    <option value="service">
                      sedentary:sitting job eg:shopkeeper,banker,software engineer
                    </option>
                    <option value="suggestions">
                      light physical work:mostly standing job eg:teacher,doctor etc
                    </option>
                    <option value="product">
moderate physical work:mostly standing and bit of moving around eg:salesman,student etc
                    </option>
                    <option value="high">
                      high physical work:heavy physical work is involved eg:labour,field engineer etc
                    </option>
                </select>







<input type="button" name="previous" class="previous action-button" value="Previous" />
 <input type="button" name="next" class="next action-button" value="Next" />  
</fieldset>

<fieldset>
    <h2 class="fs-title">3</h2>
    <h3 class="fs-subtitle">This is step 3</h3>
    <p><u>what is your aim?</u></p>
    
    <input type="checkbox" id="inlinecheckbox" name="health" value="fat" class="fat loss action-checkbox">Fat loss
    <input type="checkbox" name="health" value="muscle" class="muscle gain action-checkbox">Muscle gain
    <input type="checkbox" name="health" value="fatmuscle" class="fat loss and muscle gain action-checkbox">fat loss and muscle gain
    <input type="checkbox" name="health" value="strength" class="gain strength action-checkbox">Gain strength
    <input type="checkbox" name="health" value="healthy" class="be healthy&gain flexibility action-checkbox">Be healthy&gain flexibility
    <input type="checkbox" name="health" value="exercise" class="rehabilitation&exercise action-checkbox">Rehabilitation&exercise
    <input type="text" name="health" placeholder="other">
    
<input type="button" name="previous" class="previous action-button" value="Previous" />
 <input type="button" name="next" class="next action-button" value="Next" />  

</fieldset>



<fieldset>
    <h2 class="fs-title">4</h2>
    <h3 class="fs-subtitle">This is step 4</h3>
    <p><u>Rehabilitation exercises by body</u></p>
    <input type="checkbox" name="exercise" value="ankle" class="ankle action-checkbox">Ankle
    <input type="checkbox" name="exercise" value="knee" class="knee action-checkbox">Knee
    <input type="checkbox" name="exercise" value="hip" class="hip and groin action-checkbox">Hip and groin
    <input type="checkbox" name="exercise" value="core" class="core and abdominal action-checkbox">Core and abdominal
    <input type="checkbox" name="exercise" value="back" class="back action-checkbox">Back
    <input type="checkbox" name="exercise" value="shoulder" class="shoulder action-checkbox">Shoulder
    <input type="checkbox" name="exercise" value="arm" class="arm and elbow action-checkbox">arm and elbow
     <input type="checkbox" name="exercise" value="wrist" class="wrist and hand action-checkbox">Wrist and hand
      <input type="checkbox" name="exercise" value="na" class="not applicable action-checkbox">Not applicable
      <hr>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
 <input type="button" name="next" class="next action-button" value="Next" />  

</fieldset>


      <fieldset>
    <h2 class="fs-title">5</h2>
    <h3 class="fs-subtitle">This is step 5</h3>


     Wakeup Time: <input type="text" name="wake" placeholder="Wakeup time(in 22:53)" />
<p id="demo"></p>

<script>
function myFunction() {
    document.getElementById("myTime").value = "22:53" ;
}
</script>
      <p><u>where do you exercise</u></p>
      <input type="checkbox" name="where" value="home" class="home action-checkbox">Home
       <input type="checkbox" name="where" value="gym" class="gym action-checkbox">Gym
        <input type="checkbox" name="where" value="outdoor" class="outdoor action-checkbox">Outdoor
        
    <hr>

<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  

 </fieldset>

  <fieldset> 

     <h2 class="fs-title">6</h2>
    <h3 class="fs-subtitle">This is step 6</h3>
    <p><u>Meal Patttern</u></p>
 <input type="checkbox" name="meal" value="breakfast" class="breakfast action-checkbox"  />Breakfast
    <input type="checkbox" name="meal" value="mid" class="mid morning snacks action-checkbox" />Mid morning snacks
    <input type="checkbox" name="meal" value="lunch" class="lunch action-checkbox" />Lunch
    <input type="checkbox" name="meal" value="snacks" class="evening snacks action-checkbox" />Evening snacks
    <input type="checkbox" name="meal" value="dinner" class="dinner action-checkbox" />Dinner
    <input type="checkbox" name="meal" value="bed" class="bed time action-checkbox" />Bed time
    <hr>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />

</fieldset>





<fieldset>
    <h2 class="fs-title">7</h2>
    <h3 class="fs-subtitle">this is step 7</h3>
    <p><u>Nature of food consumed daily</u></p>
    <input type="checkbox" name="nature" value="ho" class="home cooked action-checkbox"> Home cooked
    <input type="checkbox" name="nature" value="co" class="corporate kitchen action-checkbox"> Corporate kitchen
    <input type="checkbox" name="nature" value="rest" class="restaurants action-checkbox"> Restaurants
    <input type="checkbox" name="nature" value="junk" class="junk action-checkbox"> Junk
    <hr>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />


</fieldset>



<fieldset>
    <h2 class="fs-title">8</h2>
    <h3 class="fs-subtitle">This is step 8</h3>
    <p><u>Nature of diet consumed</u></p>
    <br>
    <select>
      <option value="urban">Urban</option>
        <option value="rural">Rural</option>
        </select>
        <br>
        <p><u>Night sleep pattern</u></p>
        <br>
        <select>
          <option value="low">Low(less than 6 hours)</option>
          <option value="normal">Normal(6-8 hours)</option>
          <option value="high">More than 8 hours</option>
        </select>
        <p><u>Dietary habbit</u></p>
        <br>
        <select>
          <option value="vegetarian">vegetarian</option>
          <option value="non">Non vegetarian</option>
          <option value="egg">Eggetarian</option>
        </select>
        <br>
        <p><u>Smoke?</u></p>
        <br>
        <select>
          <option value="no">No</option>
          <option value="yes">Yes</option>
        </select>
<br>
        <p><u>Smoke?</u></p>
        <br>
        <select>
          <option value="no">No</option>
          <option value="yes">Yes</option>
        </select>



        <hr>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />


  </fieldset>






<fieldset>
    <h2 class="fs-title">9</h2>
    <h3 class="fs-subtitle">This is step 8</h3>
<p><u>Any medical condition</u></p>
 <input type="checkbox" name="medical" value="hyper" class="Hypertension(high blood pressure) action-checkbox" />Hypertension 
 <input type="checkbox" name="medical" value="hypo" class="Hypotension(low blood pressure) action-checkbox"/>Hypotension
 <input type="checkbox" name="medical" value="dia" class="Diabetic-high sugar action-checkbox" />Diabetic-high sugar 
 <input type="checkbox" name="medical" value="dial" class="Diabetic-low sugar action-checkbox" />Diabetic-low sugar 
 <input type="checkbox" name="medical" value="cardi" class="Cardiovascular condition action-checkbox"/>Cardiovascular condition
 <input type="checkbox" name="medical" value="gas" class="Gastrointestinal problem(gas,ulcer etc) action-checkbox" />Gastrointestinal(gas,etc) 
 <input type="checkbox" name="medical" value="con" class="Constipation action-checkbox"/>Constipation
 <input type="checkbox" name="medical" value="uric" class="Uric acid action-checkbox"/>Uric acid 
 <input type="checkbox" name="medical" value="dep" class="depression action-checkbox"/>Depression 
 <input type="checkbox" name="medical" value="obe" class="obesity action-checkbox"/>Obesity 
 <input type="checkbox" name="medical" value="thy" class="thyroid action-checkbox"/>Thyroid 
 <input type="checkbox" name="medical" value="dyslip" class="Dyslipidemia(cholesterol etc) action-checkbox"/>Dyslipidemia
 <input type="checkbox" name="medical" value="breath" class="Breathlessness(asthma etc) action-checkbox" />Breathlessness(eg:asthma)
 <input type="checkbox" name="medical" value="any" class="Any other please spesify action-checkbox" />Any other please spesify 
 <input type="checkbox" name="medical" value="other" class="other action-checkbox" />Other 
 <hr>
<input type="button" name="previous" class="previous action-button" value="Previous" />
 <input type="button" name="next" class="next action-button" value="Next" />
    
</fieldset>





<fieldset>
 <h2 class="fs-title">10</h2>
    <h3 class="fs-subtitle">This is step 10</h3>
<input type="text" name="any" placeholder="Any other medical condition" />
<input type="text" name="food" placeholder="Food allergy if any" />
<input type="text" name="pro" placeholder="Any medical procedure" />
<input type="text" name="coupon" placeholder="Coupon code if any" />

<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>





</form>
 <div class="article-reference">
 </div>

</div>



<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script type="text/javascript"></script>
<script>
function validateForm() {
    var x = document.forms["msform"]["name"].value;
    if (x == "") {
        alert("Name must be fi
          lled out");
        return false;
    }
}
</script>
<script>
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".formValidation").on("Next", function(e){
  
  var errorMessage  = $(".errorMessage");
  var hasError = false;
  
  $(".inputValidation").each(function(){
    var $this = $(this);
    
    if($this.val() == ""){
      hasError = true;
      $this.addClass("inputError");
      errorMessage.html("<p>Error: Please correct errors above</p>");
      e.preventDefault();
    }if($this.val() != ""){
      $this.removeClass("inputError"); 
    }else{
      return true; 
    }
  }); //Input
  
  errorMessage.slideDown(700);
}); 



$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='msfo']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.next();
    }
  });
});
$(".submit").click(function(){
  return false;
})
function customFn1(input) {
  return input.length > 0;
}

function customFn2(input) {
  return new Promise(function(resolve) {
    setTimeout(function() {
      resolve(input.value.length > 0);
    }, 3000);
  });
}

function maxLength(input) {
  return input.value.length <= 25;
}

var validation = $validator(".form", {
  timeout: 400,
  customValidations: {
    customFn1: customFn1,
    customFn2: customFn2,
    maxLength: maxLength
  }
});
validation.$validate();

var btn = document.getElementById("check");
btn.addEventListener("click", function() {
  if (validation.$isValid()) {
    window.alert("bravo! your form is awesome");
  } else {
    window.alert("There are invalid fields in your form");
  }
});


</script>
</head>
</html>

