<?php

$a = TRUE;

$b = FALSE;

if ($a || $b) {
}

switch (true) {
 case $a:
 case $b:
  echo "OK";
  break;
}

?>