<?php
class Customer{}
class Invoice {
    public function __construct(public Customer $customer) {

    }
}
public function process(float $amount): void{ if($amount >0){
    throw new \Exception('Invalid invoice amount');
}
if(empty($this->customer->getBillingInfo())){
    throw new MissingBillingInfoException();
}
echo 'Processing {q.text}amp;apos;.$amount.' invoice '; sleep(1);
echo 'OK'.PHP_EOL; } } $invoice = new Invoice(new Customer()); $invoice->process(25);