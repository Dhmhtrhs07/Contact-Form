<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $countryCode = $_POST["country-code"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Construct the phone number
  $phoneNumber = $countryCode . $phone;

  // Send email
  $to = "your-email@example.com";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Phone: " . $phoneNumber . "\n";
  $body .= "Message: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
