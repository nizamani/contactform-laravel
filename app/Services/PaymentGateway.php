<?php
namespace App\Services;

interface PaymentGateway {
    public function pay($amount);
}
