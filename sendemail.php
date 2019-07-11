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

$sponsor1 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_ChildhoodCenter.png";
$sponsor2 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_FIRST.png";
$sponsor3 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_GitHub.png";
$sponsor4 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_Gtech.png";
$sponsor5 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_Hampco.png";
$sponsor6 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_SnapOn.png";
$sponsor7 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_SolidWorks.png";
$sponsor8 = "http://www.furiousfalcons.org/images/Sponsors/Sponsor_WebCentral.png";

$content = "<table style='width: 100%;background-color: black;text-align: center;color: white;' cellpadding='5'>\n";
$content .= "<tbody><tr><td style='width: 50000px;'>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='text-align: center;padding-bottom: 0px;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: center;padding-top: 32px!important;padding-bottom: 32px!important;'>\n";
$content .= "<img src='http://www.furiousfalcons.org/images/FalconsLogo.png' alt='LOGO' width='800' style='max-width: 100%;height: auto;text-align: center;'>\n";
$content .= "<h1 style='font-family: &quot;Montserrat&quot;, sans-serif;font-size: 36px;'><b style='padding-right: 10px;'>$title</b></h1>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: justify;padding-top: 32px!important;padding-bottom: 32px!important;'>\n";
$content .= "<p style='margin: 20px 0;'>$message</p>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 250px;display: inline-block;text-align: center;padding-top: 32px!important;padding-bottom: 32px!important;'>\n";
$content .= "<img src='http://www.furiousfalcons.org/images/EmailSignature.png' alt='SIGNATURE' width='500' style='max-width: 100%;height: auto;'>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='width: 500px;text-align:center;'><td style='padding: 0.01em 16px;width: 500px;display: inline-block;text-align: center;padding-top: 32px!important;padding-bottom: 32px!important;'>\n";
$content .= "<p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'>Learn More About Us At:</p>\n";
$content .= "<p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'><a href='http://www.furiousfalcons.org' style='color: #f9c41c;'>www.FuriousFalcons.org</a></p>\n";
$content .= "<p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'>Contact Us At:</p>\n";
$content .= "<p style='font-family: &quot;Montserrat&quot;, sans-serif;text-align: center;margin: 20px 0;'><a target='_blank' href='mailto:contactus@furiousfalcons.org' style='color: #f9c41c;'>contactus@furiousfalcons.org</a></p>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='width: 500px;text-align: center;'><td>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor1'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor2'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor3'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor4'>\n";
$content .= "</td></tr>\n";
$content .= "<tr style='width: 500px;text-align: center;padding-bottom: 50px;'><td>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor5'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor6'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor7'>\n";
$content .= "<img style='width: 100px;padding: 8px;' src='$sponsor8'>\n";
$content .= "</td></tr>\n";
$content .= "</tbody></table>\n";

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
