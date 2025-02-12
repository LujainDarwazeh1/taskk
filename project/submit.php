<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get name and email from the form
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    // Display the data
    echo "<h1>Form Submitted Successfully!</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
} else {
    echo "<h1>Error: Invalid Request</h1>";
}
?>
