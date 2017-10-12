<?php
session_start();
if(!empty($_SESSION['userid'])){
    unset($_SESSION['userid']);
    $_SESSION['Message']="<div class='error'>admin Please login </div>";
    header("location:login.php");
}

?>