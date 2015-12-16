<?php

class Calculator {
private $total;

public function add($value) {
$this->total += $value;
}

public function subtract($value) {
$this->total -= $value;
}

public function multiply($value) {
$this->total *= $value;
}

public function divide($value) {
$this->total /= $value;
}

public function getTotal() {
return $this->total;
}

}