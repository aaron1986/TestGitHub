<?php
foreach (glob("*") as $filename) {
		echo "filename : " . $filename . " &#8212 ";
    echo "filesize : " . filesize($filename) . "<br>";
}
?>