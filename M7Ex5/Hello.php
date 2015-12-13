<?php

session_start();
 if(isset($_SESSION['name']) ) {
     echo "Hello" .$_SESSION['name'];
 }
 else {
     echo "Welcome Guest";
 }
 
 ?>
 
 <form action="process.php" method="post">
     Name:<input type="text" name="name"/>
     <input type="submit" name="submit" value="Set Name"/>
 </form>

