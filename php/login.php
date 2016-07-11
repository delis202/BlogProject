<?php
session_start();
if( $_POST["login"] == "admin" && $_POST["password"] == "option123") {
    //admin/option123
  $_SESSION['admin'] = true;
  header('Location: /adminpanel.php');  
}
else {
    header('Location: /adminka.php');
}




?>

