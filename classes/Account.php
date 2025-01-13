<?php
class Accaunt
{
    public $number;
    public $type;
    protected $balance;

    public function __construct( $number, $type, $balance = 0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposite($amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
