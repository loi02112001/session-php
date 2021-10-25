<?php
 session_start();
 if(isset($_SESSION['LoginOk'])){
   unset($_SESSION['LoginOk']); 
   header("Location:index.php");
 }
?>