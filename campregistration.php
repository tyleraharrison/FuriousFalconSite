<?php

session_start();

?>
<html>
<title>Furious Falcons - Camp Registration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#ffc200">
<meta name="msapplication-TileColor" content="#181818">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<body class="w3-black">
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="images/FalconsLogoOnly.png" style="width:100%">
    <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>RETURN</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-hover-opacity-off w3-center w3-small">
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:100% !important"><i class="fa fa-home w3-xxlarge"></i><br />RETURN</a>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper">
    <!-- Sponsors -->
    <div id="Sponsors">
      <ul>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_Gtech.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_Hampco.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_SnapOn.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_SolidWorks.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_WebCentral.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_Gtech.png"></li>
      </ul>
    </div>
    <div class="w3-content ff-title">
      <h1>Furious Falcons Summer STEM Camp Registration</h1>
    </div>
    <p style="display: none;">Come and register for the Furious Falcons Summer STEM Camp!</p>
    <div class="w3-content" id="registerSuccessDiv" style="text-align: center; display: none;">
      <p>Thank you for registering for our camp! We will contact you with more information soon!</p>
    </div>
    <div class="w3-content" id="formContent">
      <p class="w3-justify w3-text-grey">After you have registered, we will send you a confirmation email, please make sure you get this email. If the email appears in your spam folder, be sure to mark it as "Not Spam" that way, we will be able to contact you in the future.</p>
      <p class="error"></p>
      <form action="campregistration.php" method="post">
        <h4>General Information</h4>
        <div class="formSection formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Parent/Guardian Name *" required name="pgname"></p>
        </div>
        <div class="formSectionLast formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Student Name *" required name="sname"></p>
        </div>

        <div class="formSection formThird">
          <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number *" required name="phone"></p>
        </div>
        <div class="formSectionLast form2Third">
          <p><input class="w3-input w3-padding-16" type="email" placeholder="Email Address *" required name="email"></p>
        </div>

        <h4>Emergency Contact Information</h4>
        <h6>Primary Contact:</h6>
        <div class="formSection formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name *" required name="ec1_name"></p>
        </div>
        <div class="formSectionLast formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Relationship to Student *" required name="ec1_rel"></p>
        </div>

        <div class="formSection formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number *" required name="ec1_phone"></p>
        </div>
        <div class="formSectionLast formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Other Contact Information" name="ec1_other"></p>
        </div>

        <h6>Secondary Contact:</h6>
        <div class="formSection formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" name="ec2_name"></p>
        </div>
        <div class="formSectionLast formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Relationship to Student" name="ec2_rel"></p>
        </div>

        <div class="formSection formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number" name="ec2_phone"></p>
        </div>
        <div class="formSectionLast formHalfWidth">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Other Contact Information" name="ec2_other"></p>
        </div>

        <h4>Early Arrival & Late Departure</h4>
        <div class="formSection form2Third">
          <p>We will be providing early arrival and late departure, if requested, so please check the options that apply to you:</p>
          <label class="formCheckbox">My student will need to be dropped off earlier than the starting time (9:00 A.M.)
            <input type="checkbox" name="EALD[]" value="EA">
            <span class="checkmark"></span>
          </label>
          <label class="formCheckbox">My student will need to be picked up later than the ending time (4:00 P.M.)
            <input type="checkbox" name="EALD[]" value="LD">
            <span class="checkmark"></span>
          </label>
          <label class="formCheckbox">None of the options above apply to me
            <input type="checkbox" name="EALD[]" value="NA">
            <span class="checkmark"></span>
          </label>
        </div>

        <div class="formSection formThird">
          <p style="height: 135px;"><textarea class="w3-input" type="paragraph" placeholder="If you chose one of the first two options, please specify the times for your student" name="EALD_spec" style="height: 100%;"></textarea></p>
        </div>

        <h4>Medical Information</h4>
        <div class="formSection formThird">
          <p>Does your student require a medical device?</p>
          <label class="formCheckbox">Inhaler
            <input type="checkbox" name="med[]" value="inh">
            <span class="checkmark"></span>
          </label>
          <label class="formCheckbox">EpiPen
            <input type="checkbox" name="med[]" value="epi">
            <span class="checkmark"></span>
          </label>
          <label class="formCheckbox">Medication
            <input type="checkbox" name="med[]" value="medic">
            <span class="checkmark"></span>
          </label>
        </div>

        <div class="formSection form2Third">
          <p style="height: 135px;"><textarea class="w3-input" type="paragraph" placeholder="Please specify all allergies, medications and/or limitations" name="med_spec" style="height: 100%;"></textarea></p>
        </div>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit"><i class="fa fa-wrench" style="padding-right: 10px;"></i> REGISTER</button>
      </form>
    </div>
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">

      <h3>Useful Links</h3>
      <p style="font-size: 16px;"><a href="https://www.firstinspires.org/robotics/frc">Visit the FIRST Robotics Website</a></p>
      <p style="font-size: 16px;"><a href="/camp.php">Look at our Summer Camp</a></p>


      <a style="padding: 5px;" href="https://www.reddit.com/r/FuriousFalcons"><i class="fa fa-reddit w3-hover-opacity"></i></a>
      <a style="padding: 5px;" href="https://fb.me/furiousfalcons4328"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a style="padding: 5px;" href="https://www.youtube.com/channel/UCKGAG7kHLdjRE5BgjCmybWg"><i class="fa fa-youtube w3-hover-opacity"></i></a>
      <a style="padding: 5px;" href="https://www.instagram.com/foster_robotics/"<i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a style="padding: 5px;" href="https://www.snapchat.com/add/fosterrobotics"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
      <!--<a style="padding: 5px;" href="https://www.pinterest.com/fosterrobotics/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>-->
      <a style="padding: 5px;" href="https://twitter.com/FosterRobotics"><i class="fa fa-twitter w3-hover-opacity"></i></a>
      <!--<a style="padding: 5px;" href="https://www.linkedin.com/in/furious-falcons-936303187/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>-->

      <!-- End footer -->
    </footer>
    <!-- END PAGE CONTENT -->
  </div>
  <script src="SmoothUI.js" type="text/javascript"></script>
  <script src="FormFunctions.js"></script>
  <script type="text/javascript">
  if (window.location.search == "?registerSuccess") {
    $('#formContent').css('display', 'none');
    $('#registerSuccessDiv').css('display', 'block');
  }
  </script>
</body>
</html>
<?php

$error = "";

function error($str) {
  $GLOBALS["error"] .= "<p>" . $str . "</p>";
}

function return_error() {
  echo '<script type="text/javascript">updateError("' . $GLOBALS["error"] . '");</script>';
  exit();
}

//if form is submitted
if (isset($_POST["pgname"])) {
  //retreive variables
  $pgname = $_POST["pgname"];
  $sname = $_POST["sname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $ec1_name = $_POST["ec1_name"];
  $ec1_rel = $_POST["ec1_rel"];
  $ec1_phone = $_POST["ec1_phone"];
  if (isset($_POST["ec1_other"])) {
    $ec1_other = $_POST["ec1_other"];
  }
  if (isset($_POST["ec2_name"])) {
    $ec2_name = $_POST["ec2_name"];
  }
  if (isset($_POST["ec2_rel"])) {
    $ec2_rel = $_POST["ec2_rel"];
  }
  if (isset($_POST["ec2_phone"])) {
    $ec2_phone = $_POST["ec2_phone"];
  }
  if (isset($_POST["ec2_other"])) {
    $ec2_other = $_POST["ec2_other"];
  }
  if (isset($_POST["EALD"])) {
    $EALD = $_POST["EALD"];
  }
  if (isset($_POST["EALD_spec"])) {
    $EALD_spec = $_POST["EALD_spec"];
  }
  if (isset($_POST["med"])) {
    $med = $_POST["med"];
  }
  if (isset($_POST["med_spec"])) {
    $med_spec = $_POST["med_spec"];
  }

  //validate inputs
  if (preg_match('/[^A-Za-z]/', str_replace(" ", "", $pgname))) {
    error("Please enter a valid parent/guardian name");
  }
  if (preg_match('/[^A-Za-z]/', str_replace(" ", "", $sname))) {
    error("Please enter a valid student name");
  }
  if ((preg_match('/[^0-9]/', $phone)) || (strlen($phone) != 10)) {
    error("Please enter a valid phone number");
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    error("Please enter a valid email address");
  }
  if (preg_match('/[^A-Za-z]/', str_replace(" ", "",  $ec1_name))) {
    error("Please enter a valid primary emergency contact name");
  }
  if (preg_match('/[^A-Za-z]/', str_replace(" ", "", $ec1_rel))) {
    error("Please enter a valid primary emergency contact relationship");
  }
  if ((preg_match('/[^0-9]/', $ec1_phone)) || (strlen($ec1_phone) != 10)) {
    error("Please enter a valid primary emergency contact phone number");
  }
  if (isset($ec2_name)) {
    if (preg_match('/[^A-Za-z]/', str_replace(" ", "", $ec2_name))) {
      error("Please enter a valid secondary emergency contact name");
    }
  }
  if (isset($ec2_rel)) {
    if (preg_match('/[^A-Za-z]/', str_replace(" ", "", $ec2_rel))) {
      error("Please enter a valid secondary emergency contact relationship");
    }
  }
  if (strlen($ec2_phone) > 0) {
    if ((preg_match('/[^0-9]/', $ec2_phone)) || (strlen($ec2_phone) != 10)) {
      error("Please enter a valid secondary emergency contact phone number" . $ec2_phone);
      echo "<script type='text/javascript'>console.log('" . $ec2_phone . "');</script>";
    }
  }
  if (!isset($EALD)) {
    error("Please select an option from the Early Arrival & Late Departure section");
  }

  if(strlen($error) > 0) {
    return_error();
  } else {
    $_SESSION["email_to"] = $email;
    $_SESSION["email_from"] = "Furious Falcons <camp@furiousfalcons.org>";
    $_SESSION["email_sub"] = "Furious Falcons Camp Registration";
    $_SESSION["email_message"] = "<a href=\"furiousfalcons.org\">TEST HTML</a>";
    $_SESSION["email_title"] = "2019 Summer STEM Camp Registration Confirmation";
    $_SESSION["email_redir"] = "/campregistration.php?registerSuccess";
    session_write_close();
    echo '<script type="text/javascript">location.href = "/sendemail.php";</script>';
    exit();
  }


} else {
  $_POST = array();
}

?>
