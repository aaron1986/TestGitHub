<?php

session_start();
 if(isset($_SESSION['name']) ) {
     echo "Hello" . htmlspecialchars($_SESSION['name']);
 }
 else {
     echo "Welcome Guest";
 }
 
 ?>
 
 <form action="Process.php" method="post">
     Name:<input type="text" name="name"/>
     <input type="submit" name="submit" value="Set Name"/>
 </form>

