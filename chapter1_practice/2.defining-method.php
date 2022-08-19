<?php
class Basket
{
    public $itemTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal(){
        return $this->itemTotal + $this->shippingCost - $this->discount;
    }
}

$basket = new Basket();
$basket->itemTotal = 100;
$basket->shippingCost = 3.89;
$basket->discount = 0.25;
var_dump($basket->calculateSubTotal());

?>