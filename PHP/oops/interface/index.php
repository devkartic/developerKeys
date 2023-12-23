<?php

interface PaymentGateway
{
    public function payNow();
}
class Paypal implements PaymentGateway
{
    public function payNow(): string
    {
        return __METHOD__;
    }
}

class Visa implements PaymentGateway
{
    public function payNow(): string
    {
        return __METHOD__;
    }
}

class Cash implements PaymentGateway
{
    public function payNow(): string
    {
        return __METHOD__;
    }
}

class CheckoutPayment
{
    public function process(Cash $paymentType): string
    {
        return $paymentType->payNow();
    }
}


$paymentType = new Cash();

$payment = new CheckoutPayment();
echo $payment->process($paymentType);

