<?php
namespace App\Services;

class PayPalPayment implements PaymentGateway {
    public function pay($amount) {
        return "Paid $amount via PayPal.";
    }
}
