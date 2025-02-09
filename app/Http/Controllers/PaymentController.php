<?php

namespace App\Http\Controllers;

use App\PaymentMethods\PaymentStrategyContext;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $paymentMethod = $request->input('payment_method');
        $amount = $request->input('amount');
        if (!$paymentMethod || !$amount) {
            return $this->errorResponse('Payment method and amount must be specified.', 400);
        }
        $strategyService = new PaymentStrategyContext($paymentMethod);
        return $this->successResponse($strategyService->pay($amount));
    }
    public function handleWebhook(Request $request)
    {
        $data = $request->all();
        $paymentMethod = $request->input('payment_method');
        $strategyService = new PaymentStrategyContext($paymentMethod);
        return $this->successResponse($strategyService->handleWebhook($data));
    }
}
