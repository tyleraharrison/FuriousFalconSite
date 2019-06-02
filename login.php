<?php
session_start();

if(isset($_POST["username"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $DBservername = "sql223.main-hosting.eu";
  $DBusername = "u995699429_robot";
  $DBpassword = "5YkT;>;lZxlgh`e9~";
  $DBname = "u995699429_robot";

  $DBconn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);

  if ($DBconn->connect_error) {
    die("Connection failed :(");
  }

  $passwordEnc = base64_encode($password);

  $query = "SELECT * FROM `Users`";
  $RSusers = $DBconn->query($query);

  if ($RSusers->num_rows > 0) {
    while ($row = $RSusers->fetch_assoc()) {
      if ($row["username"] == $username) {
        if ($row["password"] == $passwordEnc) {
          $_SESSION["isLoggedIn"] = True;
          $_SESSION["userInfo"] = array("id" => $row["ID"], "user" => $row["username"], "fName" => $row["First Name"], "lName" => $row["Last Name"], "grade" => $row["Grade"], "shirt" => $row["T-Shirt Size"], "email" => $row["Email"], "phone" => $row["Phone Number"], "interests" => $row["Interest"], "birthday" => $row["Birthday"], "roles" => $row["Roles"]);
          header("Location: /dashboard.php");
        }
      }
    }
  }

  $DBconn->close();
}

?>
<html>
<title>Furious Falcons - Login</title>
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
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:100% !important">RETURN</a>
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

    <h1 style="text-align: center; font-weight: bold; font-size: 50px;">Login</h1>

    <form action="login.php" method="post" class="halfAndCenter">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Username" required name="username"></p>
      <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" required name="password"></p>
      <button class="w3-button w3-light-grey w3-padding-large" id="loginButton" type="submit"><i class="fa fa-lock" style="padding-right: 10px;"></i> LOGIN</button>
    </form>
    <div class="halfAndCenter">
      <a href="/createaccount.php">
        <button class="w3-button w3-light-grey w3-padding-large" id="createAccountButton"><i class="fa fa-user" style="padding-right: 10px;"></i> CREATE ACCOUNT</button>
      </a>
    </div>
    <!-- END PAGE CONTENT -->
  </div>

</body>
</html>
