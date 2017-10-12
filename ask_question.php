<?php
session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div style='color: red;'>Please login and try again </div>";

    header("location:login.php");
}

?>
  <?php include('includs/header.php'); ?>
  <br><br>

	<section class="container main-content">

		<div class="row">

			<div class="col-md-9">

				<div class="page-content">
                    <?php

                    if(isset($_SESSION['Message'])){
                        echo $_SESSION['Message'];
                        unset ($_SESSION['Message']);
                    }
                    ?>
					<div class="boxedtitle page-title"><h2>Ask Question</h2></div>

					<div class="form-style form-style-3" id="question-submit">
						<form action="store/Question.php" method="post" enctype="multipart/form-data">
							<div class="form-inputs clearfix">
								<p>
                                    <b class="required">Question Title<span>*</span></b>
                                    <input type="text"  name="q_title">

									<span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
								</p>


							</div>
							<div id="">

								<p>
                                    <b class="required">Question Details<span>*</span></b>

                                    <textarea id="summernote" name="q_description" cols="58" rows="8"></textarea>

                                    <script type="text/javascript">



                                        $(document).ready(function() {
                                            $('#summernote').summernote({
                                                height: "200px"
                                            });
                                        });

                                    </script>
									<span class="form-description">Type the description thoroughly and in detail .</span>
								</p>
							</div>
							<p class="form-submit">
								<input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
							</p>
                            <input type="hidden" name="username">
                            <input type="hidden" name="email">
						</form>
					</div>
				</div><!-- End page-content -->
			</div><!-- End main -->




          <?php include('includs/footer.php'); ?>