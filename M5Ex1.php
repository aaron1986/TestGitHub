<?php

class shopProduct {
    public $title;
    protected $producer = [];
    public $price;

    public function __construct($title, $producerName1, $producerName2, $price) {
        $this->title = $title;
        $this->producer[] = $producerName1;
        $this->producer[] = $producerName2;
        $this->price = $price;
    }

    public function getProducer() {
        return implode(' ', $this->producer);
    }
}

class ShopProductWriter {
    public function write ($shopProduct) {
        $str = "{$shopProduct ->title}: " . $shopProduct -> getProducer() . " ({$shopProduct -> price})\n";
        print $str;
    }
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer -> write($product1);

?>