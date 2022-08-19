<?php
require_once("ThreeDimensionalShapes.php");
class Cylinder extends ThreeDimensionalShapes
{
    // V=πr2h
    // return float
    public function volume(): float
    {
      return pi() * pow($this->dimensions['radius'],2)* $this->dimensions['height']; 
    }
}