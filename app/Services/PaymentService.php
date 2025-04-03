<?php
namespace App\Services;

class PaymentService {
    protected $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function processPayment($amount) {
        return $this->paymentGateway->pay($amount);
    }
}
