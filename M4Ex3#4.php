<?php

$files = glob('*');

//var_dump($files);

foreach ($files as $key => $file) {
   if (is_file($file)) {
       echo $file . ' is a file' . PHP_EOL;
   }else{
  echo $file . ' is a directory' . PHP_EOL;
   }
}
?>