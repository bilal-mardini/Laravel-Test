<?php

namespace App\PaymentMethods;

use App\PaymentGateways\PaymentInterface;
use App\PaymentGateways\PaypalStrategy;
use App\PaymentGateways\StripeStrategy;
use App\PaymentGateways\MollieStrategy;

class PaymentStrategyContext
{
    private PaymentInterface $strategy;

    
    public function __construct(string $paymentMethod)
    {
        $this->strategy = $this->resolveStrategy($paymentMethod);
    }

    
    private function resolveStrategy(string $paymentMethod): PaymentInterface
    {
        
        return match ($paymentMethod) {
            'paypal' => new PaypalStrategy(),
            'stripe' => new StripeStrategy(),
            default => throw new \InvalidArgumentException('invalid payment gateway'),
        };
    }

    
    public function pay(int $amount)
    {
        return $this->strategy->pay($amount);
    }

    
    public function handleWebhook(array $data)
    {
        return $this->strategy->handleWebhook($data);
    }
}
