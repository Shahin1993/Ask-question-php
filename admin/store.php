<?php

include("../vendor/autoload.php ");
use App\addpost\addpost;
$obj=new addpost();
$obj->addPost($_POST)->storeData();
?>
