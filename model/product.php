<?php 
class Product{
    public float $price;
    public int $sconto = 0;
    public int $quantity;

    public function __construct($price, $quantity){
        $this->price = $price;
        $this->quantity = $quantity;
    }
}
?>