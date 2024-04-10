<?php
//interfaces
//is essentially a blueprint that we use to group specific classes to tell them how to behave

interface PaymentInterface{
    public function paymentProcess();
}

interface LoginInterface{
    public function paymentProcess();
}

class Paypal implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){

    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();

    }
}

class BankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){}
    public function payNow(){

    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();

    }
}
class Visa implements PaymentInterface{
    public function payNow(){

    }
    public function paymentProcess(){
        $this->payNow();

    }
}
class Cash implements PaymentInterface{
    public function payNow(){

    }
    public function paymentProcess(){
        $this->payNow();

    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();
    }
    public function onlinepay(LoginInterface $paymentType){
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct ->pay($paymentType);

?>