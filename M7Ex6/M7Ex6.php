<?php
ob_start();

$title = 'The Big Book of Programming';
$description = 'This book is a great read';

echo $title . PHP_EOL;
echo $description . PHP_EOL;
echo 'Order Now!' . PHP_EOL;

$val = ob_get_clean();

echo strtoupper($val);
