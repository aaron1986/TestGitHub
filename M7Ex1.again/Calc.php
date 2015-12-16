<?php
require_once 'Calculator.php';

$Calc = new Calculator();

$Calc-> add(5);
$Calc-> multiply(7);
echo $Calc->getTotal();
?>