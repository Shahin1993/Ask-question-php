<?php
include("../vendor/autoload.php ");
use App\answer\answer;
$obj=new answer();
$obj->addAnswer($_POST)->storeAnswer();
?>