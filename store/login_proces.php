<?php
include("../vendor/autoload.php");
use App\login\login;


$obj=new login();

$obj->login($_POST);
?>