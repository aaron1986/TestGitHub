<?php
function divide($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception('Cannot Divide by Zero.');
    }else{
        return $num1/$num2;
    }
}

echo divide(10, 5);

?>