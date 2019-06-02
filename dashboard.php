<?php
if(isset($_SESSION["isLoggedIn"])) {
  $isLoggedIn = $_SESSION["isLoggedIn"];
} else {
  $isLoggedIn = false;
  $_SESSION["isLoggedIn"] = $isLoggedIn;
  $_SESSION["reference"] = "dashboard.php";
  header("Location: /login.php");
}
?>

<html>
<title>Furious Falcons - Student Dashboard</title>
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
    <a href="/index.html" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>RETURN & LOGOUT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="/index.html" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:25% !important">RETURN & LOGOUT</a>
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

    <!-- END PAGE CONTENT -->
  </div>

</body>
</html>
