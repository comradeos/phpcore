<?php

/**
 * Адаптер — это структурный паттерн проектирования, \
 * который позволяет объектам с несовместимыми интерфейсами работать вместе.
 */
 
interface IPayment {
    public function pay($amount);
 }

class PayPal {
    public function sent($amount) {
        echo "Paying via PayPal: " . $amount;
    }
}

class PayPalAdapter implements IPayment {
    private $paypal;

    public function __construct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        $this->paypal->sent($amount);
    }
}

$payPal = new PayPal();
$payPalAdapter = new PayPalAdapter($payPal);
$payPalAdapter->pay(100); // Outputs: Paying via PayPal: 100