<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "blackmandavid35@gmail.com"; // <- Change this to your actual email address
    $subject = "New Contact Form Message from Website";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Service: $service\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Try to send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>


