<?php
 session_start();
unset($_SESSION['name']);
 header('Location:index.php');

unset($_SESSION['ADMIN']);
 header('Location:index.php');
 
?>