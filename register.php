<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Register Now!​​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>register</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="register.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="register">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-412c" data-image-width="1280" data-image-height="847">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-opacity u-opacity-50 u-palette-5-dark-3 u-radius-9 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-palette-4-base u-text-1">Register Now!<span style="font-weight: 700;">
                <span style="font-weight: 400;"></span>
              </span>
            </h2>


            <div class="u-form u-form-1">
              <form action="" method="POST" class="u-clearfix u-form-spacing-9 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                
              <div class="u-form-group u-form-name">
                  <label for="name-ba1f" class="u-label">Name</label>
                  <input type="text"  name="full_name" placeholder="Enter your Name" id="name-ba1f"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-email u-form-group">
                  <label for="email-ba1f" class="u-label">Email</label>
                  <input type="email" name="email" placeholder="Enter a valid email address" id="email-ba1f"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-group u-form-phone u-form-group-3">
                  <label for="phone-e143" class="u-label">Phone no.</label>
                  <input type="tel" name="mobile" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +91155552675)" id="phone-e143"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>

                <div class="u-form-group u-form-group-4">
                  <label for="text-de8d" class="u-label">Password</label>
                  <input type="password" name="password" placeholder="Enter your password" id="text-de8d" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <input type="submit" name="submit" value="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-4-base u-radius-20 u-text-white u-btn-1" >
                </div>

                <!-- <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse"> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php
 if(isset($_POST['submit']))
 {
     //button clicked
     //echo'button clikcd';

     //get  data from form
     $full_name=$_POST['full_name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $password=$_POST['password'];
      
     $conn= mysqli_connect('localhost','root','');
     $db_select = mysqli_select_db($conn,'chhatralay') or die(mysqli_error());


     //query to save data in db
     $sql="INSERT INTO userinfo SET
         full_name='$full_name',
         email='$email',
         mobile='$mobile',
         password='$password'

     ";
      $res=mysqli_query($conn, $sql);

      if($res==TRUE)
      {
          //DATA INSERTED
          echo"data isnserted";
          //redirecting page
          //header("location:https://localhost/chhatralay/login.php");
      }
      else{
          //fail to insert data
          echo"data not inserted";
          //header("location:https://localhost/chhatralay/register.php");
      }
 } 
?>