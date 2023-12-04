<?php
class PaymentController {
    private $paymentModel;

    public function __construct() {
        $this->paymentModel = new PaymentModel();
    }

    public function processPayment($amount, $token) {
        // Validate amount and token
        if ($amount <= 0 || empty($token)) {
            // Handle validation error
            echo 'Invalid payment details';
            return;
        }

        // Process payment
        $paymentStatus = $this->paymentModel->processPayment($amount, $token);

        // Handle payment status (e.g., redirect to success or error page)
        if ($paymentStatus) {
            // Payment successful
            header('Location: /success');
        } else {
            // Payment failed
            header('Location: /error');
        }
    }
}
?>
