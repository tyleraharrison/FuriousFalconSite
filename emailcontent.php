<?php
session_start();

$message = $_SESSION["email_message"];
$title = $_SESSION["email_title"];

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
  <title>Furious Falcons Email</title>
  <style type="text/css">
  /* Some resets and issue fixes */
  #outlook a { padding:0; }
  body{ width:100% !important; -webkit-text; size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass {width:100%;}
  .backgroundTable {margin:0 auto; padding:0; width:100%;!important;}
  table td {border-collapse: collapse;}
  .ExternalClass * {line-height: 115%;}
  /* End reset */

  @import url(http://fonts.googleapis.com/css?family=Roboto:300);

  #content {
    font-family: Roboto;
    color: white;
    background-color: black;
    text-align: center;
  }

  body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
  /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
  #wrapper {margin-left: 120px}
  /* Remove margins from "page content" on small screens */
  @media only screen and (max-width: 600px) {#wrapper {margin-left: 0}}

  body {
    padding: 0;
    margin: 0
  }

  header {
    height: 100px;
  }

  p {
    margin: 20px 0;
  }

  ol li {
    padding: 5px;
  }

  .wrapper {
    width: 400px;
    margin: 0 auto;
    position: relative;
    padding: 28px 0 0 0;
  }

  nav {
    position: absolute;
    left: 0;
    right; 0;
    top: 0px;
    background: green;
    display: block;
    width: 100%;
    padding: 4px 0;
    height: 30px;
    z-index: 100;
  }

  nav a {
    font-family: helvetica;
    color: #ffffff;
    padding: 2px; 4px;
    display: block;
    float: left;
    text-decoration: none;
    margin-right: 4px;
  }

  nav a:hover,
  nav a.active {
    background: white;
    color: green
  }

  .fixed {
    position: fixed;
    top: 0
  }

  #Sponsors {
    text-align: center;
  }

  #Sponsors ul {
    width: calc(100% - 200px);
  }

  #Sponsors li {
    padding: 15px;
  }

  .forDesktop {
    display: inline-block;
  }

  .forMobile {
    display: none;
  }

  #Sponsors li img {
    vertical-align: middle;
    max-width: 100px;
    max-height: 50px;
  }

  #homeSection {
    padding-bottom: 0px;
    width: 100% !important;
  }

  @media screen and (max-width: 600px) {
    .halfAndCenter {
      width: 90%;
    }

    .forMobile {
      display: inline-block;
    }

    #Sponsors {
      margin: 0;
      position: relative;
      overflow: hidden;
    }

    @keyframes scroll {
      100% {
        transform: translateX(-65%);
      }
    }

    #Sponsors ul {
      padding: 0;
      margin-top: 60px;
      width: 1600px;
      height: 50px;
      transform: translate3d(0, 0, 0);
      animation: scroll 15s linear 1s infinite;
      z-index: 20;
    }

    #Sponsors ul li {
      float: left;
      vertical-align: middle;
    }

    #SignIn {
      display: none;
    }

  }

  .ff-title {
    text-align: center;
    margin-top: 50px;
  }

  .ff-title h1 {
    font-weight: bold;
  }

  @media screen and (max-width: 630px) {
    .hide {display:none !important;}
    .fullWidth {width:100% !important; height:auto !important;}
    .center {text-align:center !important; width:100% !important; height:auto !important;}
    .fullWidthSidePad {width:100% !important; padding:0 20px 0 20px;}
  }

  .w3-container{padding:0.01em 16px; width:100%}
  .w3-padding-32{padding-top:32px!important;padding-bottom:32px!important}
  .w3-center{display:inline-block;width:auto;text-align:center}
  .w3-image{max-width:100%;height:auto;}
  h1{font-size:36px}

  </style>
</head>

<body style="padding:0; margin:0">
  <div id="content">
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
    <!-- Header/Home -->
    <section class="scrollSection w3-center" id="homeSection" data-anchor="homeSection">
      <div class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <img src="http://www.furiousfalcons.org/images/FalconsLogo.png" alt="LOGO" class="w3-image" width="800">
        <h1><b style="padding-right: 10px;"><?php echo $title ?></b></h1>
      </div>
    </section>

    <div id="emailcontent">
      <p><?php echo $message ?></p>
      </div>

      <div class="w3-container w3-padding-32 w3-center w3-black" id="signature">
        <img src="http://www.furiousfalcons.org/images/EmailSignature.png" alt="SIGNATURE" class="w3-image" width="500">
      </div>
    </div>
  </body>
  </html>
