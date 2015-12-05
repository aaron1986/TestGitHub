<?php

$totalsize = glob('*');

//var_dump($files);

$filename = 'aaron.php';
echo $filename . ': ' . filesize($filename) . 'bytes';

?>