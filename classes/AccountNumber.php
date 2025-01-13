<?php
class AccountNumber{
    public $accountNumber;
    public $routingNumber;

    public function __construct($accountNumber, $routingNumber){
        $this->accountNumber = $accountNumber;
        $this->routingNumber = $routingNumber;
    }
             
}