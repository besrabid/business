<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "besrabid@gmail.com";
  $subject = "New message from Restaurant Services & Logos website";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $body = "<html><body>";
  $body .= "<h3>Name:</h3><p>$name</p>";
  $body .= "<h3>Email:</h3><p>$email</p>";
  $body .= "<h3>Message:</h3><p>$message</p>";
  $body .= "</body></html>";

  if (mail($to, $subject, $body, $headers)) {
    echo "Your message was sent successfully!";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}

?>
