<?php

require_once 'init.php';

$c = new Calculator;

$c->setOperation (new Adder);
$c->calculate(10, 50);

$c->setOperation (new Subtractor);
$c->calculate(30);

$c->setOperation (new Multiplier);
$c->calculate(5);

$c->setOperation (new Divider);
$c->calculate(2);

echo $c->getResult();
