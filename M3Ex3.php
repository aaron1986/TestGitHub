<?php
$array = array(
    1 => range (1, 4),
    2 => range (1, 4),
    3 => range (1, 4)
);
$numbers = count($array);
for ($i = 1; $i <= $numbers; $i += 2) {  echo "<br>";
  echo $i . ': ' . implode(',', $array[$i]) . PHP_EOL;
}

?>