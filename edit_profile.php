<?php
session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div style='color: red;'>Please login and try again </div>";

    header("location:login.php");
}

?>
<?php

$row=$_SESSION['userid'];
?>

<?php include('includs/header.php'); ?>

<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User Profile Name : <?php echo $row['username']; ?></h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="#">Home</a>
                    <span class="crumbs-span">/</span>
                    <a href="#">User</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">User Profile</span>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</div><!-- End breadcrumbs -->

<section class="container main-content">
    <div class="row">
        <div class="col-md-9">
            <div class="page-content">
                <div class="boxedtitle page-title"><h2>User Profile</h2></div>

                <div class="form-style form-style-4">
                    <form action="store/update.php" method="post">
                        <div class="form-inputs clearfix">
                            <p>
                                <label>Username</label>
                                  <?php echo $row['username']; ?>
                            </p>

                            <p>
                                <label class="required">E-Mail<span>*</span></label>
                                <input type="text" name="email" value=" <?php echo $row['email']; ?>">
                            </p>
                        </div>

                        <p class="form-submit">
                            <input type="submit" value="Update" class="button color small login-submit submit">
                        </p>

                    </form>
                </div>
            </div><!-- End page-content -->
        </div><!-- End main -->

<?php include('includs/footer.php'); ?>