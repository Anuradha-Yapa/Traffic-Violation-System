<?php

use Stripe\Checkout\Session;
use Stripe\Stripe;

require_once 'config.php';

require_once 'stripe-php/init.php';

Stripe::setApiKey(STRIPE_API_KEY);
$response = array(
    'status' => 0,
    'error' => array(
        'message' => 'Invalid Request!'   
    )
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input = file_get_contents('php://input');
	$request = json_decode($input);	
}
if (json_last_error() !== JSON_ERROR_NONE) {
	http_response_code(400);
	echo json_encode($response);
	exit;
}

$referenceNo = $request->ID;
$price = $request->Price;
$currency = $request->Currency;

$stripeAmount = round($price*100, 2);

if(!empty($request->checkoutSession)){

    try {
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'product_data' => [
                        'name' => $referenceNo,
                        'metadata' => [
                            'pro_id' => $referenceNo
                        ]
                    ],
                    'unit_amount' => $stripeAmount,
                    'currency' => $currency,
                ],
                'quantity' => 1,
                'description' => $referenceNo,
            ]],
            'mode' => 'payment',
            'success_url' => STRIPE_SUCCESS_URL.'?session_id={CHECKOUT_SESSION_ID}&getID='.$referenceNo,
            'cancel_url' => STRIPE_CANCEL_URL,
        ]);
    }catch(Exception $e) { 
        $api_error = $e->getMessage(); 
    }
    
    if(empty($api_error) && $session){
        $response = array(
            'status' => 1,
            'message' => 'Checkout Session created successfully!',
            'sessionId' => $session['id']
        );
    }else{
        $response = array(
            'status' => 0,
            'error' => array(
                'message' => 'Checkout Session creation failed! '.$api_error   
            )
        );
    }
}

echo json_encode($response);