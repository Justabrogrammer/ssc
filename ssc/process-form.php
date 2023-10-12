<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address where you want to receive the messages.
    $to = "your-email@example.com"; // Replace with your email address
    
    // Set the subject for the email.
    $subject = "New Contact Form Submission from $name";
    
    // Create the email message.
    $message_content = "Name: $name\n";
    $message_content .= "Email: $email\n";
    $message_content .= "Message:\n$message";
    
    // Additional headers.
    $headers = "From: $email";
    
    // Send the email.
    mail($to, $subject, $message_content, $headers);
    
    // Redirect the user to a thank-you page after submission.
    header("Location: thank-you.html"); // Replace with the URL of your thank-you page.
} else {
    // Handle cases where the form wasn't submitted properly.
    echo "Form submission failed. Please try again.";
}
?>
