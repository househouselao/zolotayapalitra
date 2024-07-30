<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51PP1KtDyJXIrVcSsXjjyzorn0PiPW4ne4BpbFNc7K22irXWgBd8ocTaX7Uw8z9P05f3551O9whafyFhsRF6xxyRX00CKIYHzOb'); // Замените 'your-secret-key' на ваш секретный ключ Stripe

$token = $_POST['stripeToken'];

try {
    $charge = \Stripe\Charge::create([
        'amount' => 1000, // Сумма в cents
        'currency' => 'usd',
        'source' => $token,
        'description' => 'Example charge',
    ]);

    echo "Payment successful!";
} catch(\Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>