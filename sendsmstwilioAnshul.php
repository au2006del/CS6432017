<?php
// this line loads the library
// require('Twilio.php');
// use vendor\twilio\sdk\Twilio\Rest\Client;
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use Twilio\Rest\Client;
echo "Hello";

$account_sid = 'ACa49266a70a3af56e47fcc14864334c3b' ;
$auth_token = 'c96173043eb7864c8eaa676ac4e597be';
$client = new Client($account_sid, $auth_token);




$client->messages->create(
'+15512295673',
array(
// 'To' => "+15512295673",
'From' => "+16283003802",
'Body' => "Hello Anshul Uapdhyay CS643 Fall 2017"
));
?>
