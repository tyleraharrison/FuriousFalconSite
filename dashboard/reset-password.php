<?php
session_start();

if (!isset($_SESSION["id"])) {
  header("Location: /dashboard/forgot-password.php");
} else {
  $id = $_SESSION["id"];
  $email = $_SESSION["email"];
  $username = $_SESSION["username"];
}

?>
<html>
<title>Furious Falcons - Reset Password</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/stylesheet.css">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#ffc200">
<meta name="msapplication-TileColor" content="#181818">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<body class="w3-black">
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="/images/FalconsLogoOnly.png" style="width:100%">
    <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>RETURN</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-hover-opacity-off w3-center w3-small">
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:100% !important"><i class="fa fa-home w3-xlarge"></i><br />RETURN</a>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper">
    <!-- Sponsors -->
    <div id="Sponsors">
      <ul>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_Gtech.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_Hampco.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_SnapOn.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_SolidWorks.png"></li>
        <li class="forDesktop"><img src="/images/Sponsors/Sponsor_WebCentral.png"></li>
        <li class="forMobile"><img src="/images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forMobile"><img src="/images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forMobile"><img src="/images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forMobile"><img src="/images/Sponsors/Sponsor_Gtech.png"></li>
      </ul>
    </div>

    <h1 style="text-align: center; font-weight: bold; font-size: 50px;">Reset Password</h1>
    <p class="error"></p>
    <p style="display: none; text-align: center;" class="halfAndCenter success">Your password has been reset, you can now use this <a href="/dashboard/login.php" style="color: #f9c41c;">link</a> to login.</p>
    <form action="reset-password.php" method="post" class="halfAndCenter form" id="resetPSForm">
      <p>If all you needed was your username, than here you go: <b style="font-weight: 800;"><?php echo $username; ?></b> and use this <a style="color: #f9c41c;" href="/dashboard/login.php">link</a> to login. If you need to reset your password, please do so below:</p>
      <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" required name="pass" value=""></p>
      <p><input class="w3-input w3-padding-16" type="password" placeholder="Confirm Password" required name="pass2" value=""></p>
      <button class="w3-button w3-light-grey w3-padding-large" id="loginButton" type="submit"><i class="fa fa-refresh" style="padding-right: 10px;"></i> RESET PASSWORD</button>
    </form>
    <!-- END PAGE CONTENT -->
  </div>
  <script src="/FormFunctions.js"></script>
</body>
</html>
<?php

if(isset($_POST["pass"])) {

  if ($_POST["pass"] == $_POST["pass2"]) {

    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    $DBservername = "sql223.main-hosting.eu";
    $DBusername = "u995699429_robot";
    $DBpassword = "5YkT;>;lZxlgh`e9~";
    $DBname = "u995699429_robot";

    $DBconn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);

    if ($DBconn->connect_error) {
      die("Connection failed :(");
    }

    $query = "SELECT * FROM `Users` WHERE `ID`=\"" . $id . "\";";
    $RSuser = $DBconn->query($query);

    if ($RSuser->num_rows > 0) {
      while ($row = $RSuser->fetch_assoc()) {
        if ($row["ID"] == $id && $row["Email"] == $email && $row["username"] == $username) {
          $key = pack('H*', "6145564d526e64534e34736c616c3533597539716d7a4763466a736333635964");

          $plaintext = $pass;
          $cipher = "aes-128-gcm";
          $ivlen = openssl_cipher_iv_length($cipher);
          $iv = openssl_random_pseudo_bytes($ivlen);
          $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
          //store $cipher, $iv, and $tag for decryption later
          $passEnc = $ciphertext . ";\n" . base64_encode($iv) . ";\n" . base64_encode($tag) . ";\n";

          $query = "UPDATE `Users` SET `password`=\"" . $passEnc . "\" WHERE `ID`=\"" . $id . "\";";
          $RSupdatePass = $DBconn->query($query);
          echo '<script type="text/javascript">
          success();
          </script>';
          session_unset();
          session_destroy();
        }
      }
    }
    
    $DBconn->close();

  } else {
    echo '<script type="text/javascript">
    updateError("Passwords must match");
    </script>';
    exit();
  }
}
?>
