<?php
session_start();
if(!empty($_SESSION['userid'])){
    unset($_SESSION['userid']);
    $_SESSION['Message']="<div style='color: red;font-weight: bold;font-size: 30px;'>Please login </div>";
    header("location:index.php");
} 
?>