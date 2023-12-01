<?php
class PaymentModel {
    public function processPayment($amount, $token) {
        // Implement your payment gateway logic here (e.g., using Stripe)
        // Ensure to handle errors and return the payment status
        
        // Example Stripe integration
        \Stripe\Stripe::setApiKey('your_stripe_secret_key');

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $amount * 100, // Amount in cents
                'currency' => 'egp',
                'source' => $token, // Token obtained from the client-side
                'description' => 'Car Rental Payment',
            ]);

            // Payment successful
            return true;
        } catch (\Stripe\Exception\CardException $e) {
            // Payment failed
            return false;
        }
    }
}
?>
