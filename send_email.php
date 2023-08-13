<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "parvikdave@gmail.com"; // Replace with the actual email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
