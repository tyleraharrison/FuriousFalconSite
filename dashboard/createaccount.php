<?php ?>
<html>
<title>Furious Falcons - Create Account</title>
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


    <h1 style="text-align: center; font-weight: bold; font-size: 50px;">Create Account</h1>
    <div class="halfAndCenter" id="successMessage" style="display: none;">
      <p>Your account has been created. Please click on the button below to login!</p>
      <a href="login.php" class="w3-button w3-light-grey w3-padding-large"><i class="fa fa-lock" style="padding-right: 10px;"></i> LOGIN</a>
    </div>
    <div class="halfAndCenter" id="createAccountDiv">
      <p class="error"></p>
      <form action="createaccount.php" method="post" style="padding-bottom: 200px;">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="First Name" required name="fName" value="<?php echo isset($_POST['fName']) ? $_POST['fName'] : '' ?>"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Last Name" required name="lName" value="<?php echo isset($_POST['lName']) ? $_POST['lName'] : '' ?>"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Student ID" required name="id" value="<?php echo isset($_POST['id']) ? $_POST['id'] : '' ?>"></p>
        <p><select class="w3-input w3-padding-16" name="grade">
          <option value="default" selected disabled>Grade</option>
          <option value="9">9th Grade</option>
          <option value="10">10th Grade</option>
          <option value="11">11th Grade</option>
          <option value="12">12th Grade</option>
        </select></p>
        <p><select class="w3-input w3-padding-16" name="shirt">
          <option value="default" selected disabled>T-Shirt Size</option>
          <option value="S">Small</option>
          <option value="M">Medium</option>
          <option value="L">Large</option>
          <option value="XL">X-Large</option>
          <option value="XXL">XX-Large</option>
        </select></p>
        <p>
          <select class="birthdayForm w3-padding-16" name="birthM" required>
            <option value="default" disabled selected>Birth Month</option>
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="mar">March</option>
            <option value="apr">April</option>
            <option value="may">May</option>
            <option value="jun">June</option>
            <option value="jul">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">October</option>
            <option value="nov">November</option>
            <option value="dec">December</option>
          </select>
          <select class="birthdayForm w3-padding-16" name="birthD">
          </select>
          <select class="birthdayForm w3-padding-16" name="birthY">
          </select>
        </p>
        <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number (Only Numbers)" required name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>"></p>
        <p><input class="w3-input w3-padding-16" type="email" placeholder="Email Address" required name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"></p>
        <h3 style="font-weight: bold;">Select Your Interests</h3>
        <label class="formCheckbox">Mechanical Engineering (Construction & Assembly)
          <input type="checkbox" name="Int_ME">
          <span class="checkmark"></span>
        </label>
        <label class="formCheckbox">Electrical Engineering (Wiring & Connections)
          <input type="checkbox" name="Int_EE">
          <span class="checkmark"></span>
        </label>
        <label class="formCheckbox">Computer Science (Programming)
          <input type="checkbox" name="Int_CS">
          <span class="checkmark"></span>
        </label>
        <label class="formCheckbox">Fluid-Power Engineering (Pneumatics & Hydraulics)
          <input type="checkbox" name="Int_FPE">
          <span class="checkmark"></span>
        </label>
        <label class="formCheckbox">Control Engineering (Driving & Manipulating)
          <input type="checkbox" name="Int_CE">
          <span class="checkmark"></span>
        </label>
        <label class="formCheckbox">CAD Engineering (3D Modeling & Design)
          <input type="checkbox" name="Int_CADE">
          <span class="checkmark"></span>
        </label>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Username (If blank will be ID#)" name="user" value="<?php echo isset($_POST['user']) ? $_POST['user'] : '' ?>"></p>
        <p><input class="w3-input w3-padding-16" type="password" placeholder="Password" required name="pass" value=""></p>
        <p><input class="w3-input w3-padding-16" type="password" placeholder="Confirm Password" required name="pass2" value=""></p>
        <label class="formCheckbox">I agree to abide by and follow all of the <a target="_blank" href="https://drive.google.com/file/d/1ZFJea1E3gfRuNDjq4E5COidX4KM1NRDG/view">Bylaws</a>
          <input type="checkbox" name="Bylaws_Ack">
          <span class="checkmark"></span>
        </label>
        <button class="w3-button w3-light-grey w3-padding-large" id="loginButton" type="submit"><i class="fa fa-lock" style="padding-right: 10px;"></i> CREATE ACCOUNT</button>
      </form>
    </div>
    <!-- END PAGE CONTENT -->
  </div>

  <script src="/SmoothUI.js" type="text/javascript"></script>
  <script src="/FormFunctions.js"></script>
  <script type="text/javascript">
  var birthDay = document.getElementsByClassName("birthdayForm")[1];
  var birthYear = document.getElementsByClassName("birthdayForm")[2];

  var days = "";
  for (var i = 0; i < 32; i++) {
    if (i == 0) {
      days += '<option value="default" disabled selected>Birth Day</option>';
    } else {
      temp = '<option value="' + i + '">' + i + '</option>\n';
      days += temp;
    }
  }
  birthDay.innerHTML = days;

  var years = "";
  for (var i = 1989; i < 2020; i++) {
    if (i == 1989) {
      years += '<option value="default" disabled selected>Birth Year</option>';
    } else {
      temp = '<option value="' + i + '">' + i + '</option>\n';
      years += temp;
    }
  }
  birthYear.innerHTML = years;

  </script>

</body>
</html>
<?php

if (isset($_POST["fName"]) && isset($_POST["lName"]) && isset($_POST["id"]) && isset($_POST["grade"]) && isset($_POST["shirt"]) && isset($_POST["birthM"]) && isset($_POST["birthD"]) && isset($_POST["birthY"])) {
  $isValid = True;
  $fName = $_POST["fName"];
  $lName = $_POST["lName"];
  $id = $_POST["id"];
  $grade = $_POST["grade"];
  $shirt = $_POST["shirt"];
  $birthM = $_POST["birthM"];
  $birthD = $_POST["birthD"];
  $birthY = $_POST["birthY"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $interests = "";
  if (isset($_POST["Int_ME"])) {
    $interests .= "1";
  }
  if (isset($_POST["Int_EE"])) {
    $interests .= "2";
  }
  if (isset($_POST["Int_CS"])) {
    $interests .= "3";
  }
  if (isset($_POST["Int_FPE"])) {
    $interests .= "4";
  }
  if (isset($_POST["Int_CE"])) {
    $interests .= "5";
  }
  if (isset($_POST["Int_CADE"])) {
    $interests .= "6";
  }
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $pass2 = $_POST["pass2"];
  if (isset($_POST["Bylaws_Ack"])) {
    $bylaws = True;
  } else {
    $bylaws = False;
  }

  //Validators
  if ((!preg_match('~[A-Za-z]+~', $fName)) || (!preg_match('~[A-Za-z]+~', $lName))) {
    echo '<script type="text/javascript">
    updateError("Please enter a valid name");
    </script>';
    $isValid = False;
  }
  if ((!preg_match('~[0-9]+~', $id)) || (strlen($id) < 6) ) {
    echo '<script type="text/javascript">
    updateError("Please enter a valid student ID");
    </script>';
    $isValid = False;
  }
  if ($grade == "default") {
    echo '<script type="text/javascript">
    updateError("Please enter your grade level");
    </script>';
    $isValid = False;
  }
  if ($shirt == "default") {
    echo '<script type="text/javascript">
    updateError("Please enter your shirt size");
    </script>';
    $isValid = False;
  }
  if ((($birthM == "apr" || $birthM == "jun" || $birthM == "sep" || $birthM == "nov") && $birthD == "31") || ($birthM == "feb" && ($birthD == "29" || $birthD == "30" || $birthD == "31")) || ($birthM == "default" || $birthD == "default" || $birthY == "default")) {
    echo '<script type="text/javascript">
    updateError("Please enter a valid birthday");
    </script>';
    $isValid = False;
  }
  if ((!preg_match('~[0-9]+~', $phone)) || (strlen($phone) != 10)) {
    echo '<script type="text/javascript">
    updateError("Please enter a valid phone number");
    </script>';
    $isValid = False;
  }
  if ($pass != $pass2) {
    echo '<script type="text/javascript">
    updateError("Passwords do not match");
    </script>';
    $isValid = False;
  }

  if (!$bylaws) {
    echo '<script type="text/javascript">
    updateError("Please agree to the bylaws");
    </script>';
    $isValid = False;
  }

  if ($isValid) {
    $DBservername = "sql223.main-hosting.eu";
    $DBusername = "u995699429_robot";
    $DBpassword = "5YkT;>;lZxlgh`e9~";
    $DBname = "u995699429_robot";

    $DBconn = new mysqli($DBservername, $DBusername, $DBpassword, $DBname);

    if ($DBconn->connect_error) {
      die("Connection failed :(");
    }

    //birthday and password conversion
    switch ($birthM) {
      case "jan":
      $birthM = "01";
      break;
      case "feb":
      $birthM = "02";
      break;
      case "mar":
      $birthM = "03";
      break;
      case "apr":
      $birthM = "04";
      break;
      case "may":
      $birthM = "05";
      break;
      case "jun":
      $birthM = "06";
      break;
      case "jul":
      $birthM = "07";
      break;
      case "aug":
      $birthM = "08";
      break;
      case "sep":
      $birthM = "09";
      break;
      case "oct":
      $birthM = "10";
      break;
      case "nov":
      $birthM = "11";
      break;
      case "dec":
      $birthM = "12";
      break;
    }
    $birthday = $birthY . '-' . $birthM . '-' . $birthD;

    $registerDate = date("Y-m-d");

    # --- ENCRYPTION ---
    $key = pack('H*', "6145564d526e64534e34736c616c3533597539716d7a4763466a736333635964");

    $plaintext = $pass;
    $cipher = "aes-128-gcm";
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    //store $cipher, $iv, and $tag for decryption later
    $passEnc = $ciphertext . ";\n" . base64_encode($iv) . ";\n" . base64_encode($tag) . ";\n";

    $query = 'SELECT `ID` FROM `Users`';
    $RSids = $DBconn->query($query);
    $query = 'SELECT `username` FROM `Users`';
    $RSusers = $DBconn->query($query);

    $isExists = False;
    if ($RSids->num_rows > 0) {
      while($row = $RSids->fetch_assoc()) {
        if ($row["ID"] == $id) {
          $isExists = True;
          echo '<script type="text/javascript">
          updateError("A user with this ID has already been created. Try logging in.");
          </script>';
        }
      }
    }
    if ($RSusers->num_rows > 0) {
      while ($row = $RSusers->fetch_assoc()) {
        if ($row["username"] == $user) {
          $isExists = True;
          echo '<script type="text/javascript">
          updateError("A user with this username has already been created. Try a different one.");
          </script>';
        }
      }
    }

    if (!$isExists) {
      $query = 'INSERT INTO `Users`(`ID`, `username`, `password`, `First Name`, `Last Name`, `Grade`, `T-Shirt Size`, `Email`, `Phone Number`, `Interest`, `Birthday`, `Registration Date`) VALUES ("' . $id . '","' . $user . '","' . $passEnc . '","' . $fName . '","' . $lName . '","' . $grade . '","' . $shirt . '","' . $email . '","' . $phone . '","' . $interests . '","' . $birthday . '","' . $registerDate . '");';
      $RSusers = $DBconn->query($query);
      $_POST["fName"] = "";
      $_POST["lName"] = "";
      $_POST["id"] = "";
      $_POST["grade"] = "";
      $_POST["shirt"] = "";
      $_POST["birthM"] = "";
      $_POST["birthD"] = "";
      $_POST["birthY"] = "";
      $_POST["phone"] = "";
      $_POST["email"] = "";
      $_POST["user"] = "";
      $_POST["pass"] = "";
      $_POST["pass2"] = "";
      echo '<script type="text/javascript">
      document.getElementById("createAccountDiv").style.display = "none";
      document.getElementById("successMessage").style.display = "block";
      </script>';
    }

    $DBconn->close();
  }

} else {
  echo '<script type="text/javascript">
  updateError("Please fill out all fields")
  </script>';
}

?>
