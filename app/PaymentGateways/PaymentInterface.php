<?php

namespace App\PaymentGateways;

interface PaymentInterface
{
    public function pay(int $amount);
    public function handleWebhook(array $data);
    public function verifyWebhookSignature(array $data, string $signature);
}
