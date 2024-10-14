<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $project = htmlspecialchars(trim($_POST['project']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Your email where the message will be sent
    $to = "rishi18neel@gmail.com";

    // Email subject
    $subject = "New Contact Message from " . $name;

    // Email content
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Project: $project\n";
    $body .= "Message: $message\n";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Success message
        echo "Your message has been sent successfully!";
    } else {
        // Failure message
        echo "Failed to send the message. Please try again.";
    }
}
?>
