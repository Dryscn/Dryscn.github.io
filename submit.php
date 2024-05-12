<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting the form data and applying basic HTML escaping to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    echo "Received the following information:<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone";
}
?>
