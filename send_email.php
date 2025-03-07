<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the email
    $to = "socalmangaclub@gmail.com"; // Change this to your email address
    $emailSubject = "New Message!";
    $message_body = "Email: $email\nSubject: $subject\nMessage: $message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $emailSubject, $message_body, $headers)) {
        // Redirect to contact_us.html with success parameter
        header("Location: contact_us.html?success=1");
        exit();
    } else {
        // Redirect to contact_us.html with error parameter
        header("Location: contact_us.html?error=1");
        exit();
    }
} else {
    echo "There was a problem with your submission, please try again.";
}
?>
