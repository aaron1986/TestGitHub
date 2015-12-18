<?php

session_start();

$name=strip_tags($_POST["name"]);

$_SESSION["name"]= $name;

?>

<p>Name Set Successfully!</p>
<a href="Hello.php">Click Here</a> to go to previous page!


