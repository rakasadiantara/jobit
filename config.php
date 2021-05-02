<?php 

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('833673370209-o36163bvd88mpiuvh00kgrdia3ea2e6v.apps.googleusercontent.com');

$google_client->setClientSecret('bDZHW_zFnVaKNeDTrof9bJSB');

$google_client->setRedirectUri('http://localhost/jobit/login.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>