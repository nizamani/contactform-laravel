<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService) {
        $this->paymentService = $paymentService;
    }

    public function pay() {
        return $this->paymentService->processPayment(100);
    }
}
