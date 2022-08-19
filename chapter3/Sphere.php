<?php


class Sphere extends ThreeDimensionalShapes{

    //V=4/3πr3
    public function volume(): float
    {
        return 4 / 3 * pi() * pow($this->dimensions['radius'],3);
    }
}