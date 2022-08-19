<?php

class Bid
{
    // public $minimumBidAmount = 5;
    // public $bidAmount;
    private $minimumBidAmount = 5;
    private $bidAmount;

    public function setBidAmount($amount){
        if ($amount < $this->minimumBidAmount) {
            $this->bidAmount = $this->minimumBidAmount;
            return;
        }
        $this->bidAmount = $amount;
    }

    public function getBidAmount(){
        return $this->bidAmount;
    }
}
