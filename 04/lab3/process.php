<?php
require "includes/header.php"; 
//clean data using filter_input

//accessing the form data 
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $userMsg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
// required fields / sanitization
$errors = [];
if (empty($firstName)){
    $errors[]= "First name is required.";
}
if (empty($lastName)){
    $errors[]= "Last name is required.";
}
if (empty($email)){
    $errors[]= "A valid email is required.";
}
if (empty($userMsg)){
    $errors[]= "Message field cannot be empty.";
}
//email format validation
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors[]= "Please enter a valid email address.";
}
//show any errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>{$error}</p>";
    }
    echo "<p><a href='index.php'>Go back to the form</a></p>";
    require "includes/footer.php";
    exit;
}
//email configuration
$to      = "bitumi@gmail.com"
$subject = "New Contact Form Submission";
//email body
$emailBody = "CONTACT FORM SUBMISSION\n";
$emailBody .= "=========================\n";
$emailBody .= "Customer: {$firstName} {$lastName}\n";
$emailBody .= "Email: {$email}\n\n";
$emailBody .= "{$userMsg}\n";
//send email
$headers = "From: {$email}\r\n";
mail($to, $subject, $emailBody, $headers);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Contact Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <main>
    <h1>Thank You for Your Message! 🧁</h1>

    <p>
      Thanks <strong><?= $firstName ?></strong>!
      Your message has been received and sent to the bakery.
    </p>

    <h2>Your Message Details</h2>

    <p><strong>Name:</strong> <?= $firstName ?> <?= $lastName ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Message:</strong><?= $message ?></p>
    <p>
      A confirmation has been sent to the bakery.
    </p>

      <a href="index.html">Send Another Message</a>
      </main>

<?php require "includes/footer.php"; ?> 