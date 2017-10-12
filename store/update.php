<?php
include("../vendor/autoload.php");
use App\update\update;
//use App\utility\utility;
//use App\auth\addpost;

$obj=new update();

$obj->setData($_POST)->update();

?>