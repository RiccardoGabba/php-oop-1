<?php 
class Product{
    protected float $price;
    public int $sconto = 0;
    protected int $quantity;

    public function __construct($price, $quantity){
        $this->price = $price;
        $this->quantity = $quantity;
    }
}
?>