<?php
require_once "Mail.php";
$from = "UST Submit Form <noreply@usersoft.com>";
$to = "Robert Broussard <rob@usersoft.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "smtp.1and1.com";
$port = "587";
$username = "rob@usersoft.com";
$password = "";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
?>