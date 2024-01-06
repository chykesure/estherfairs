<?php

require_once '../vendor/autoload.php';

session_start();

// init configuration
$clientID = '988009725428-tff7ogerratmb35hkthj3akv8reosn5c.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'indexusers/mail';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "app-google-login";

$conn = mysqli_connect($hostname, $username, $password, $database);


