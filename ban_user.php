<?php
// Check if the email parameter is set
if (isset($_POST['email'])) {
    // Retrieve the email from the request
    $email = $_POST['email'];

    // Validate the email (you can add more validation here)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format';
        exit;
    }

    // Perform the ban action (you would typically store the banned email in a database)
    // For demonstration purposes, we'll just display a message
    echo 'User with email ' . $email . ' has been banned.';
} else {
    // No email parameter provided
    echo 'No email provided';
}
?>
