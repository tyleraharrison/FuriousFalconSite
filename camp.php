<?php

if (isset($_POST["name"])) {

  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  if ($name == "") {
    $name = "*";
  }
  if ($phone == "") {
    $phone = "*";
  }

  $file = fopen("CampContactList.txt", "a");
  fwrite($file,
  "Customer {
    Name: " . $name . "
    Phone: " . $phone . "
    Email: " . $email .
    "\n}\n\n");
  fclose($file);

}
?>

<html>
<title>Furious Falcons - Camp</title>
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
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:100% !important"><i class="fa fa-home w3-xlarge"></i><br />RETURN</a>
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
    <div id="CampPageTitle" class="w3-content">
      <h1>Furious Falcons Robotics Summer Camp</h1>
      <h4>Hosted at Foster High School</h4>
    </div>

    <div class="w3-content">
      <p style="text-align: center;">We are still finalizing some of the details for our summer camp this year. Please subscribe to our information email list, and we will notify you once all of the bugs are worked out.</p>
      <form action="camp.php" method="post">
        <p><input name="name" placeholder="Name" class="w3-input w3-padding-16" type="text"></p>
        <p><input name="phone" placeholder="Phone Number" class="w3-input w3-padding-16" type="tel"></p>
        <p><input name="email" placeholder="Email Address" class="w3-input w3-padding-16" type="email" required></p>
        <button class="w3-button w3-light-grey w3-padding-large" id="loginButton" type="submit"><i class="fa fa-envelope" style="padding-right: 10px;"></i> SIGN UP</button>
      </form>
    </div>

    <!-- END PAGE CONTENT -->
  </div>

</body>
</html>
