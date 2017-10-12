<?php
session_start();

if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div class='error'>Please login and try again </div>";

    header("location:../login.php");
}

?>


<?php include("header.php"); ?>

            <h2>Admin Panel</h2>
            <div style="font-weight:bold;color:#3d9ccd;font-size:29px;text-align:center">
                Welcome to the Dashboard <br>
                question and answer
            </div>
<?php include("footer.php"); ?>

