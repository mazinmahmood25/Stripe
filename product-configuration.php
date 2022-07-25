<?php
// Include Configuration File

require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    
    <!-- Stripe Library -->
    <script src="https://js.stripe.com/v3/"></script>

    <script src="https://www.paypal.com/sdk/js?client-id=Abh_Q_YpRXCv9X-OLwZycwDGWluf9rnWZ2Vc46zLN9LhDdvb2riHQfPgXEpsjbYMfkowsfi6U67_qCQu&disable-funding=credit,card"></script>

    <!-- Checkout With Stripe API -->

    <script src="js/checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
</head>
<body>
    <div class="container">
        <h1>Stripe Payment</h1>
        <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
        
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.isset($_POST['total_amount'])?$_POST['total_amount']:'0'.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
        <!-- Display status message -->
        <div id="paymentResponse" class="hidden"></div>
        
        <!-- Display a payment form -->
        <form id="paymentFrm" class="hidden">
            <div class="form-group">
                <label class="form-label">NAME</label>
                <input class="form-control" type="text" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label class="form-label">EMAIL</label>
                <input class="form-control" type="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            
            <div id="paymentElement">
                <!--Stripe.js injects the Payment Element-->
            </div>
            
            <!-- Form submit button -->
            <button id="submitBtn" class="btn btn-primary mt-4">
                <div class="spinner hidden" id="spinner"></div>
                <span id="buttonText">Pay Now</span>
            </button>
        </form>

        <div id="paypal-payment-button" class="btn mt-4">

        </div>
        
        <!-- Display processing notification -->
        <div id="frmProcess" class="hidden mb-3 ">
            <span class="ring"></span>
        </div>
        
        <!-- Display re-initiate button -->
        <div id="payReinit" class="hidden">
            <button class="btn btn-primary" onClick="window.location.href=window.location.href.split('?')[0]"><i class="rload"></i>Re-initiate Payment</button>
        </div>
    </div>
</div>
    </div>
    
</body>
</html>