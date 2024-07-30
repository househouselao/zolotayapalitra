<?php
require_once 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51PP1KtDyJXIrVcSsXjjyzorn0PiPW4ne4BpbFNc7K22irXWgBd8ocTaX7Uw8z9P05f3551O9whafyFhsRF6xxyRX00CKIYHzOb');

function createPaymentIntent($amount, $currency) {
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'currency' => $currency,
        'payment_method_types' => ['card'],
    ]);
    return $paymentIntent;
}