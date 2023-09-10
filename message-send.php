<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Create email content
    $to = "leonardo.kulon@gmail.com"; // Replace with the recipient's email address
    $subject = "Contact Us Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
