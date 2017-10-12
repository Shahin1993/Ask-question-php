<?php
include("../vendor/autoload.php ");
use App\question\question;
$obj=new question();
$obj->q_delete($_GET['id']);

?>
