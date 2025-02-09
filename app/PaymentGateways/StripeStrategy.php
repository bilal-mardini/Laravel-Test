<?php

namespace App\PaymentGateways;

class StripeStrategy implements PaymentInterface
{
    public function pay(int $amount)
    {
        // Stripe payment processing logic
    }

    public function handleWebhook(array $data)
    {
        // Handle Stripe webhook
        $this->verifyWebhookSignature($data, $data['signature']);
        // Process the webhook data
    }

    public function verifyWebhookSignature(array $data, string $signature)
    {
        // Verify the Stripe webhook signature for security
    }
}
