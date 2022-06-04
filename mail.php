
<?php
$mysqli = new mysqli('localhost:3307','root','','login');
$to_email = "khayimbaaustin@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,blues This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed...";
}
?>