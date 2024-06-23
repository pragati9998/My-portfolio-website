<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Example: Send email
    $to = "pragatichaudhary23@gmail.com"; // Replace with your email address
    $email_subject = "Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message\n";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for your message. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
