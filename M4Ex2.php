<?php

function makeArrayUpper(&$array)
{
    $array = array_map("strtoupper", $array);
}

$array = explode(' ', 'Zend Training - Building Security into your PHP Applications');

makeArrayUpper($array);

var_dump($array);

?>