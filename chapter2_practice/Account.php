<?php

class Account
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
      echo "depositing " . $amount . "<br>";
    }

    public function withdraw($amount)
    {
        echo "withdrawing " . $amount . "<br>";
    }

    public function getBalance()
    {
        return $this->balance;
    }
}