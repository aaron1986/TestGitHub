<?php
function makeArrayUpper( &$array ) {
    if ( is_array( $array ) && count( $array ) > 0 ) {
        foreach( $array as $key => $value) {
            $array[$key] = strtoupper( $value );
        }
        return true;
    }
    return false;
}
$array = explode( ' ' , 'Zend Training – Building Security into your PHP Applications' );
//$array = 'test';
if (makeArrayUpper( $array )) {
    echo 'Success';
} else {
    echo 'Array Not Passed';
}
echo PHP_EOL;
var_dump( $array );
?>

