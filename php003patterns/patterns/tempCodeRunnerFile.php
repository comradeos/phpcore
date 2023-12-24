<?php
class PayPal {
    public function sendPayment($amount) {
        echo "Paying via PayPal: " . $amount;
    }
 }

 interface PaymentAdapter {
    public function pay($amount);
 }

 class PayPalAdapter implements PaymentAdapter {
    private $paypal;

    public function __constrct(PayPal $paypal) {
        $this->paypal = $paypal;
    }

    public function pay($amount) {
        $this->paypal->sendPayment($amount);
    }
}

$paypal = new PayPal();
$adapter = new PayPalAdapter($paypal);
$adapter->pay(100); // Outputs: Paying via PayPal: 100