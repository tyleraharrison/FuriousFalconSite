<?php
session_start();

if(isset($_POST['comments'])) {
  $email_to = "rubixsolver99@yahoo.com";
  $email_subject = "TEST EMAIL";

  $headers = 'From: fosterrobotics@gmail.com'."\r\n".
  'Reply-To: fosterrobotics@gmail.com'."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);
  echo "ALL GOOD";
}

function sendMail($to, $from, $subject, $message, $title = " ", $bcc = False) {
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    if ($bcc) {
      $headers .= "BCC: fosterrobotics@gmail.com\r\n";
    }
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ($title == " ") {
      $title = $subject;
    }

    $_SESSION["email_message"] = $message;
    $_SESSION["email_title"] = $title;

    mail($to, $subject, file_get_contents("emailcontent.php"), $headers);
}

?>
<html>
<body>
  <form action="emails-DRAFT.php" method="post">
    <p style="height: 200px;"><textarea style="height: 100%" class="w3-input w3-padding-16" placeholder="MESSAGE" name="comments"></textarea></p>
    <button class="w3-button w3-light-grey w3-padding-large" type="submit"><i class="fa fa-wrench" style="padding-right: 10px;"></i> SEND MESSAGE</button>
  </form>
</body>
</html>
