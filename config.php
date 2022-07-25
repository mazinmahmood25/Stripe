<?php 

// Product Details

$itemName = "Demo Product";
$itemNumber = "PN12345";
$itemPrice = 25;
$currency = "USD";
$dedicated = 50;
$ssl = 150;

// Stripe API Configuration

define('STRIPE_API_KEY', 'sk_test_51LI5TCAzGcouWH1kbyox2MgolLLGTGn9cpna4AsbgDtpxUXyq0I8j55LjB76BiSyeTcYperk10EcSrIHwlmYPW9x00WIxxQSTW');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51LI5TCAzGcouWH1kobMZXAM7xfERq9fvc1sH7Imk1Jnf7AYh1QQPokf8sWBDDEAruUTv1XUHeDJWtkCfpArphDv100VCXtn1fh');

// Database Connection

define('DB_HOST' , 'localhost');
define('DB_USERNAME' , 'root');
define('DB_PASSWORD' , '');
define('DB_NAME', 'payment');