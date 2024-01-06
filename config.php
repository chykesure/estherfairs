<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'ARBywbVnzvUJrt0UBo77QFqVJQHin5pXShJPUwrJPcuQYGzA28iP_aWdD_7X2A5wsg6ibvQ_VU7kVay5');
define('CLIENT_SECRET', 'ECQYWGnZ-J5q9vhlZtOBSFVZQ1vnDJmqXnpNdkk4ND8UECn_Ckop-7Sc_d_hZ93FWabDBBMiR07pgsWp');
 
define('PAYPAL_RETURN_URL', 'https://estherfairscakes.co.uk/success.php');
define('PAYPAL_CANCEL_URL', 'https://estherfairscakes.co.uk/cancel.php');
define('PAYPAL_CURRENCY', 'EUR'); // set your currency here
 
// Connect with the database
$db = new mysqli('localhost', 'root', '', 'paypal'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live