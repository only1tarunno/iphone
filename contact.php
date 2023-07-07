<?php
// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];

// Set up email parameters
$to = 'recipient@example.com';  // Replace with your email address
$subject = 'New form submission';
$headers = "From: $fname <$email>" . "\r\n";
$body = "Name: $fname\nEmail: $email\nCompany: $company\nPhone: $phone\nMessage: $message";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
} else {
    echo 'Message could not be sent.';
}
?>