<?php
include("../vendor/autoload.php ");
use App\signup\signup;
$obj=new signup();
$obj->delete($_GET['id']);

?>


