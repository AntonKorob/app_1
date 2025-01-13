<?php
class Customer
{
    public $forename;
    public $surname;
    public $email;
    public $accounts;
    private $password;

    function __construct($forename, $surname, $email, $accounts, $password)
    {
        $this->forename = $forename;
        $this->surname = $surname;
        $this->email = $email;
        $this->accounts = $accounts;
        $this->password = $password;
    }

    function getFullName() {
        return $this->forename . ' ' . $this->surname;
    }
}
