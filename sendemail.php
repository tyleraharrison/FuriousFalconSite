<?php
session_start();

$to = $_SESSION["email_to"];
$from = $_SESSION["email_from"];
$subject = $_SESSION["email_sub"];
$message = $_SESSION["email_message"];
$title = $_SESSION["email_title"];
if (isset($_SESSION["email_bcc"])) {
  $bcc = $_SESSION["email_bcc"];
}
$redir = $_SESSION["email_redir"];

session_unset();
session_destroy();


$content = "<table style='width: 100%;background-color: black;text-align: center;color: white;' cellpadding='5'><tbody><tr><td style='width: 50000px;'></td></tr><tr style='text-align: center;padding-bottom: 0px;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: center;padding-top: 32px!important;padding-bottom: 32px!important;'><img src='http://www.furiousfalcons.org/images/FalconsLogo.png' alt='LOGO' width='800' style='max-width: 100%;height: auto;text-align: center;'><h1 style='font-family: &quot;Montserrat&quot;, sans-serif;font-size: 36px;'><b style='padding-right: 10px;'>$title</b></h1></td></tr><tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: justify;padding-top: 32px!important;padding-bottom: 32px!important;'><p style='margin: 20px 0;'>$message</p></td></tr><tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 250px;display: inline-block;text-align: center;padding-top: 32px!important;padding-bottom: 32px!important;'><img src='http://www.furiousfalcons.org/images/EmailSignature.png' alt='SIGNATURE' width='500' style='max-width: 100%;height: auto;'></td></tr><tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: justify;padding-top: 32px!important;padding-bottom: 32px!important;'><p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'>Learn More About Us At:</p><p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'><a href='http://www.furiousfalcons.org' style='color: #f9c41c;'>www.FuriousFalcons.org</a></p><p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'>Contact Us At:</p><p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'><a href='mailto:contactus@furiousfalcons.org' style='color: #f9c41c;'>contactus@furiousfalcons.org</a></p></td></tr><tr style='width: 500px;text-align: center;'><td><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_ChildhoodCenter.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_FIRST.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_GitHub.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_Gtech.png'></td></tr><tr style='width: 500px;text-align: center;padding-bottom: 50px;'><td><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_Hampco.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_SnapOn.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_SolidWorks.png'><img style='width: 100px;padding: 8px;' src='http://furiousfalcons.org/images/Sponsors/Sponsor_WebCentral.png'></td></tr></tbody></table>";

echo $content;

$header = "From: " . $from . " \r\n";
if (isset($bcc)) {
  $header .= "BCC: " . $bcc . " \r\n";
}
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $content, $header);

if ($retval == true) {
  header("Location: " . $redir);
} else {
  echo "ERROR";
}

?>
