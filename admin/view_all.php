<?php
session_start();

if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div class='error'>Please login and try again </div>";

    header("location:../login.php");
}

?>

<?php

include("../vendor/autoload.php ");
use App\signup\signup;
$obj=new signup();
$row=$obj->view($_GET['id']);

?>
<html>
<head>
    <title>view infomation</title>
    <link rel="stylesheet" type="text/css" href="../css/adminstyle.css"/>
</head>
<body><div id="wrapper">
<table border="1">
     <tr>
         <th>name</th>
         <th>emial</th>
         <th>Member ins</th>
     </tr>
    <tr>
        <td><?php echo $row['username']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['create_at']; ?> </td>
    </tr>

</table>
</div>
</body>
</html>