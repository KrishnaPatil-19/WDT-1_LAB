<?php
    // Set a cookie that expires in 1 hour
    $cookie_name = "user";
    $cookie_value = "John Doe";
    $expiration = time() + 3600; // 3600 seconds = 1 hour
    setcookie($cookie_name, $cookie_value, $expiration);
    echo "Cookie '$cookie_name' is set with value '$cookie_value' and will expire in 1 hour. <br>";

    // Check if cookie is set or not
    if(isset($_COOKIE['user'])){
        $cookie_value = $_COOKIE['user'];
        echo "Hello, $cookie_value! <br>";
    } else {
        echo "Cookie 'user' is not set. <br>";
    }

    // Delete a cookie by setting its expiration time to past
    $cookie_name = "user";
    if(isset($_COOKIE[$cookie_name])){
        setcookie($cookie_name, "", time() - 3600); // Set expiration time to the past
        echo "Cookie '$cookie_name' has been deleted. <br>";
    } else {
        echo "Cookie '$cookie_name' does not exist. <br>";
    }
?>