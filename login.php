<?php
require_once 'vendor/autoload.php';  // Composer autoload file for Facebook SDK

// Facebook app configuration
$fb = new \Facebook\Facebook([
    'app_id' => '891621832881061', // Replace with your app ID
    'app_secret' => '42844bc94348a2a725588cd1c6a2e8e9', // Replace with your app secret
    'default_graph_version' => 'v16.0',
]);

$helper = $fb->getRedirectLoginHelper();
$redirectURL = 'http://localhost/facebook-login/login.php'; // Replace with your redirect URL
$permissions = ['email']; // Optional permissions

if (isset($_GET['fb_login'])) {
    $loginUrl = $helper->getLoginUrl($redirectURL, $permissions);
    header("Location: $loginUrl");
    exit;
}

try {
    if (isset($_GET['state'])) {
        $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    }
    $accessToken = $helper->getAccessToken();

    if (isset($accessToken)) {
        $response = $fb->get('/me?fields=name,email', $accessToken);
        $user = $response->getGraphUser();
        $name = $user['name'];
        $email = $user['email'];

        // Display the user details
        echo "<div class='container'><div class='box'>";
        echo "<label>Name: " . htmlspecialchars($name) . "</label><br>";
        echo "<label>Email: " . htmlspecialchars($email) . "</label>";
        echo "</div></div>";
    }
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
