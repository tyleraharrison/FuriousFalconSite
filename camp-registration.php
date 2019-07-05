<?php
if(isset($_POST['pgname'])) {

  // EDIT THE 2 LINES BELOW AS REQUIRED
  $email_to = $_POST['email'];
  $email_subject = "Furious Falcons Summer STEM Camp Registration";

  function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
  }

  $pgname = $_POST['pgname']; // required
  $sname = $_POST['sname']; // required
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];

  if (isset($_POST['comments'])) {
    $comments = $_POST['comments'];
  }


  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp, $email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

  $string_exp = "/^[A-Za-z .'-]+$/";

  if(strlen($error_message) > 0) {
    died($error_message);
  }

  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  $email_message = "
  <html>
  <body style=\"background-color: black;>" .
  $comments .
  "</body>
  </html>
  ";

  // create email headers
  $headers = "From: Furious Falcons <donotreply@furiousfalcons.org>\r\n" .
  $headers .="Reply-To: Furious Falcons <donotreply@furiousfalcons.org>\r\n" .
  //"Bcc: fosterrobotics@gmail.com\r\n" .
  $headers .= "Content-Type: text/html; charset=iso-8859-1\r\n" .
  $headers .= "MIME-Version: 1.0\r\n";
  @mail($email_to, $email_subject, $email_message, $headers);


  //TODO: Change redirect link
  if (isset($email)) {
    header("Location: /camp.php?registerSuccess");
  }
  exit();

}
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
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
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
      <h1>Furious Falcons Camp Registration</h1>
      <h4>Hosted at Foster High School</h4>
    </div>
    <div class="w3-content">
      <h3>Ready to Register?</h3>
      <hr style="width: 200px" class="w3-opactiy">
      <p class="w3-justify w3-text-grey">Payment will be collected later, please sign up now if you think you will attend.</p>
      <form action="camp-registration.php" method="post">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Parent/Guardian Name" required name="pgname"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Student Name" required name="sname"></p>
        <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number" required name="phone"></p>
        <p><input class="w3-input w3-padding-16" type="email" placeholder="Email Address" required name="email"></p>
        <p style="height: 200px;"><textarea style="height: 100%" class="w3-input w3-padding-16" placeholder="Additional Questions/Comments/Concerns" name="comments"></textarea></p>
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
</body>
</html>
