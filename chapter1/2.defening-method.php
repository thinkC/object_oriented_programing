<?php

class Basket
{
    public $itemTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal(){
        $subTotal  = $this -> itemTotal + $this -> shippingCost - $this -> discount;
        return $subTotal;
    }
}

$basket = new Basket();
$basket -> itemTotal = 50;
$basket -> shippingCost = 10;
$basket -> discount = 30;
// var_dump($basket);

$subTotal = $basket -> calculateSubTotal();
var_dump($subTotal);