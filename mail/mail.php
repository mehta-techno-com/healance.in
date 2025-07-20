<?php
// Get form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
//$message = htmlspecialchars($_POST['message']) . '"\n" Mobile no :' . $phone;
$message = htmlspecialchars($_POST['message']) . "\nMobile no: " . $phone . "\n\nRegards,\n" . $name;


// Email details
$to = "hr@healance.in";
//$to = "pappu@mehtatechno.com";
$subject = "healance Pharma Contact Form Submission from $name";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    // Redirect back to contactus.html with success
    header("Location: ../contact.html?success=1");
    exit();
} else {
    // Redirect back with error
    header("Location:../contact.html?error=1");
    exit();
}
?>
