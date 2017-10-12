<?php
include ('../vendor/autoload.php');
use App\update\update;
$upd=new update();
$upd->addPost($_POST)->updateAnswer();
?>