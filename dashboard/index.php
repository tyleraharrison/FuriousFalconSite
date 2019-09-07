<?php
session_start();

if(isset($_SESSION["isLoggedIn"])) {
  if ($_SESSION["isLoggedIn"]) {
    $isLoggedIn = $_SESSION["isLoggedIn"];
    $userInfo = $_SESSION["userInfo"];
  }
} else {
  $_SESSION["isLoggedIn"] = False;
  header("Location: /dashboard/login.php");
  exit();
}

function add30Days($year, $month, $day) {
  if ($month == "01" || $month == "03" || $month == "05" || $month == "07" || $month == "08" || $month == "10" || $month == "12") {
    if ($day == "01") {
      $day = 31;
    } else {
      $day -= 1;
    }
    $month += 1;
  } else if ($month == "04" || $month == "06" || $month == "09" || $month == "11") {
    $month += 1;
  } else if ($month == "02") {
    $day += 2;
    $month += 1;
  }
  if ($month == 13) {
    $month = 1;
    $year += 1;
  }
  if (strlen($month) == 1) {
    $month = "0" . $month;
  }
  if (strlen($day) == 1) {
    $day = "0" . $day;
  }
  return $year . "-" . $month . "-" . $day;
}

function isDateGreater($year1, $month1, $day1, $year2, $month2, $day2) {
  if ($day2 > $day1) {
    return True;
  } else if ($month2 > $month1) {
    return True;
  } else if ($year2 > $year1) {
    return True;
  } else {
    return False;
  }
}

$startDate = $userInfo["registerDate"];
$day = substr($startDate, -2);
$month = substr($startDate, -4, 2);
$year = substr($startDate, 0, 4);
$date30 = add30Days($year, $month, $day);
$year30 = substr($date30, 0, 4);
$month30 = substr($date30, -4, 2);
$day30 = substr($date30, -2);
$currentDay = date("d");
$currentMonth = date("m");
$currentYear = date("Y");

if (isDateGreater($currentYear, $currentMonth, $currentDay, $year30, $month30, $day30)) {
  $showRegisterInfo = False;
} else {
  $showRegisterInfo = True;
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
      <a href="/dashboard/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:33% !important"><i class="fas fa-tachometer-alt w3-xlarge"></i><br />DASHBOARD</a>
      <!-- TODO: Change href -->
      <a href="http://192.168.1.22/attendance.php?id=<?php echo $userInfo["id"]; ?>" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:33% !important"><i class="fa fa-sign-in fa-rotate-180 w3-xlarge"></i><br />SIGN INTO A MEETING</a>
      <a href="/index.php" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:33% !important"><i class="fa fa-sign-out fa-rotate-180 w3-xlarge"></i><br />LOGOUT</a>
    </div>
  </div>
  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper" style="margin-top: 50px;">

    <div class="w3-content" style="text-align: center;">
      <h1 style="font-weight: bold;">Welcome to your Robotics Automated Dashboard, Fellow Falcon!</h1>
      <h3>What can I do for you, <?php echo $userInfo["fName"]; ?>?</h3>
    </div>

    <div class="w3-content">
      <?php
      //TODO: Remove !
      if ($showRegisterInfo) {
        echo "<div class=\"w3-row-padding\" style=\"margin:0 -16px\">\n
        <div class=\"w3-margin-bottom\">\n
        <ul class=\"w3-ul w3-white w3-center\">\n
        <li class=\"w3-dark-grey w3-xlarge w3-padding-32\">Newly Registered Objectives</li>\n
        <li class=\"w3-padding-16\">Please complete all of the following tasks within the first month of your registration.</li>\n
        <li class=\"w3-padding-16\"><a target=\"_blank\" href=\"https://discord.gg/r7Zrs4A\">Join the Discord</a></li>\n
        <li class=\"w3-padding-16\"><a target=\"_blank\" href=\"https://trello.com/invite/furiousfalcons4328/4b3ecd46d4786aec963c1536e8e4e5db\">Join the Trello</a></li>\n
        <li class=\"w3-padding-16\"><a target=\"_blank\" href=\"https://docs.google.com/forms/d/e/1FAIpQLSd47N_z49GWVNuzwBf26gn3SfTMvwje-vkzAo6467-1pTskSw/viewform?usp=pp_url&entry.790555731=" . $userInfo["id"] . "\">Complete Emergency Contact Form</a></li>\n
        </ul>\n
        </div>";
      }
      ?>
    </div>
    <!-- END PAGE CONTENT -->
  </div>

</body>
</html>
