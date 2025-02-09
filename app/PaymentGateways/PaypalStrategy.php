<?php

namespace App\PaymentGateways;

class PaypalStrategy implements PaymentInterface
{
    public function pay(int $amount)
    {
        // PayPal payment processing logic
    }

    public function handleWebhook(array $data)
    {
        // Handle PayPal webhook
        $this->verifyWebhookSignature($data, $data['signature']);
        // Process the webhook data
    }

    public function verifyWebhookSignature(array $data, string $signature)
    {
        // Verify the PayPal webhook signature for security
    }
}
