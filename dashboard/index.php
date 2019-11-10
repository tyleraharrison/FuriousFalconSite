<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION["isLoggedIn"])) {
  if ($_SESSION["isLoggedIn"]) {
    $isLoggedIn = $_SESSION["isLoggedIn"];
    $userInfo = $_SESSION["userInfo"];
  }
} else {
  $_SESSION["isLoggedIn"] = False;
  $_SESSION["redir"] = "/dashboard/index.php";
  header("Location: /dashboard/login.php");
  exit();
}

$DBservername = "sql223.main-hosting.eu";
$DBusername = "u995699429_robot";
$DBpassword = "5YkT;>;lZxlgh`e9~";
$DBname = "u995699429_robot";

$DBconn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);

$query = "SELECT * FROM `Website Information`";
$RSwebinfo = $DBconn->query($query);

$isExists = False;
if ($RSwebinfo->num_rows > 0) {
  while($row = $RSwebinfo->fetch_assoc()) {
    if ($row["ID"] == $userInfo["id"]) {
      $isExists = True;
    }
  }
}

if (!$isExists) {
  $query = 'INSERT INTO `Website Information`(`ID`) VALUES ("' . $userInfo["id"] . '");';
  $RSaddUser = $DBconn->query($query);
}

$query = 'SELECT * FROM `Website Information` WHERE `ID` = ' . $userInfo["id"];
$RSuserWebInfo = $DBconn->query($query);

$userWebInfo = array();
$webInfo = array();
if ($RSuserWebInfo->num_rows > 0) {
  while($row = $RSuserWebInfo->fetch_assoc()) {
    $webInfo = array_keys($row);
    array_shift($webInfo);
    foreach($row as $col) {
      if(strlen($col) > 1) {
        continue;
      } else {
        array_push($userWebInfo, $col);
      }
    }
  }
}

if (isset($_GET["togTask"])) {
  $task = $_GET["togTask"];
  $index = array_search($task, $webInfo);
  $curVal = $userWebInfo[$index];
  if ($curVal == "1") {
    $query = 'UPDATE `Website Information` SET `' . $task . '`="0" WHERE `ID` = ' . $userInfo["id"];
    $userWebInfo[$index] = "0";
  } else {
    $query = 'UPDATE `Website Information` SET `' . $task . '`="1" WHERE `ID` = ' . $userInfo["id"];
    $userWebInfo[$index] = "1";
  }
  $DBconn->query($query);
}

?>

<html>
<title>Furious Falcons - Student Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="/stylesheet.css">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#ffc200">
<meta name="msapplication-TileColor" content="#181818">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/ae92485cd8.js"></script>
<style>

.formCheckbox {
  font-size: 16px;
}

.task {
  text-align: left;
}

</style>

<body class="w3-black">
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="/images/FalconsLogoOnly.png" style="width:100%">
    <a href="/dashboard/index.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fas fa-tachometer-alt w3-xxlarge"></i>
      <p>DASHBOARD</p>
    </a>
    <!-- TODO: Change href -->
    <a href="http://192.168.1.22/attendance.php?id=<?php echo $userInfo["id"]; ?>" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-sign-in w3-xxlarge"></i>
      <p>SIGN INTO A MEETING</p>
    </a>
    <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-sign-out fa-rotate-180 w3-xxlarge"></i>
      <p>LOGOUT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-hover-opacity-off w3-center w3-small">
      <div style="margin-top: 15px;" class="menuIconContainer" onclick="menuIconTrans(this)">
        <div class="menuIconBar1"></div>
        <div class="menuIconBar2"></div>
        <div class="menuIconBar3"></div>
      </div>
      <div class="menuContainer">

      </div>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper" style="margin-top: 50px;">

    <div class="w3-content" style="text-align: center;">
      <h1 style="font-weight: bold;">Welcome to your Robotics Automated Dashboard, Fellow Falcon!</h1>
      <h3>What can I do for you, <?php echo $userInfo["fName"]; ?>?</h3>
    </div>

    <div class="w3-content">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">To-Do Tasks</li>
            <li class="w3-padding-16">Please complete all of the following tasks within the first month of your registration.</li>
            <?php

            if ($userWebInfo[0] == "1") {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Join the <a target="_blank" href="https://discord.gg/r7Zrs4A">Discord</a>
                <input type="checkbox" name="task_joinDiscord">
                <span class="checkmark"></span>
                </label>
                </li>';
            } else {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Join the <a target="_blank" href="https://discord.gg/r7Zrs4A">Discord</a>
                <input type="checkbox" name="task_joinDiscord" checked="checked">
                <span class="checkmark"></span>
                </label>
                </li>';
            }
            if ($userWebInfo[1] == "1") {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Join the <a target="_blank" href="https://trello.com/invite/furiousfalcons4328/4b3ecd46d4786aec963c1536e8e4e5db">Trello</a>
              <input type="checkbox" name="task_joinTrello">
                <span class="checkmark"></span>
                </label>
                </li>';
            } else {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Join the <a target="_blank" href="https://trello.com/invite/furiousfalcons4328/4b3ecd46d4786aec963c1536e8e4e5db">Trello</a>
                <input type="checkbox" name="task_joinTrello" checked="checked">
                <span class="checkmark"></span>
                </label>
                </li>';
            }
            if ($userWebInfo[2] == "1") {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Complete Your <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd47N_z49GWVNuzwBf26gn3SfTMvwje-vkzAo6467-1pTskSw/viewform?usp=pp_url&entry.790555731=' . $userInfo["id"] . '">Emergency Contact Form</a>
                <input type="checkbox" name="task_ECForm">
                <span class="checkmark"></span>
                </label>
                </li>';
            } else {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Complete Your <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd47N_z49GWVNuzwBf26gn3SfTMvwje-vkzAo6467-1pTskSw/viewform?usp=pp_url&entry.790555731=' . $userInfo["id"] . '">Emergency Contact Form</a>
                <input type="checkbox" name="task_ECForm" checked="checked">
                <span class="checkmark"></span>
                </label>
                </li>';
            }
            if ($userWebInfo[3] == "1") {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Review the <a target="_blank" href="https://docs.google.com/presentation/d/1nB95tUWsdkZtM0QpcyWIdgusFGLjsYORQ6vAyGc6-ys/edit?usp=sharing">Safety Presentation</a>
                <input type="checkbox" name="task_safetyPres">
                <span class="checkmark"></span>
                </label>
                </li>';
            } else {
              echo '<li class="w3-padding-16 task">
              <label class="formCheckbox">Reviw the <a target="_blank" href="https://docs.google.com/presentation/d/1nB95tUWsdkZtM0QpcyWIdgusFGLjsYORQ6vAyGc6-ys/edit?usp=sharing">Safety Presentation</a>
                <input type="checkbox" name="task_safetyPres" checked="checked">
                <span class="checkmark"></span>
                </label>
                </li>';
            }

            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script>
  $("input:checkbox").click(function() {
    window.location.replace("/dashboard/index.php?togTask=" + this.name);
  });

  function menuIconTrans(x) {
    x.classList.toggle("menuIconChange");
  }

  function menuTrans(x) {
    if (x.)
  }
  </script>
  <!-- END PAGE CONTENT -->
</body>
</html>
