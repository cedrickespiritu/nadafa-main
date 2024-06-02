<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = 'your-secret-key';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_keys = json_decode($response, true);

    if(intval($response_keys["success"]) !== 1) {
        echo 'Please complete the reCAPTCHA';
    } else {
        // Proceed with form submission handling
    }
}
?>
