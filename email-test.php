<?php
/*

session_start();

if (isset($_POST["to"])) {
  $_SESSION["email_to"] = $_POST["to"];
  $_SESSION["email_from"] = $_POST["from"];
  $_SESSION["email_sub"] = $_POST["sub"];
  $_SESSION["email_message"] = $_POST["message"];
  $_SESSION["email_title"] = $_POST["title"];
  $_SESSION["email_redir"] = "http://www.furiousfalcons.org";
  session_write_close();
  header("Location: /sendemail.php");
  exit();
}
*/
?>

<html>
<head>
</head>
<body>
  <form method="post" action="email-test.php">
    <input type="text" name="to"></input>
    <input type="text" name="from"></input>
    <input type="text" name="sub"></input>
    <input type="text" name="message"></input>
    <input type="text" name="title"></input>
    <input type="submit"></input>
  </form>
</body>
</html>
