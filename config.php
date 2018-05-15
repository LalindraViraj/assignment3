<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1095786103299-ca57kjrtg3lecpf97e5gni3mj59v9rma.apps.googleusercontent.com");
	$gClient->setClientSecret("XMnXYCYfVJXITtCmxUH5z9fO");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
