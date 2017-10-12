
<?php
error_reporting(0);
include("vendor/autoload.php");
use App\answer\answer;

$obj1=new  answer();
$result=$obj1->showAnswer($_GET['id']);

?>


<?php
session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div style='color: red;'>Please login and try again </div>";

    header("location:login.php");
}

?>

<?php include('includs/header.php'); ?>


<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <?php

            if(isset($_SESSION['Message'])){
                echo $_SESSION['Message'];
                unset ($_SESSION['Message']);
            }
            ?>
            <div class="col-md-12">
                <h1>This is my first Question</h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="index.php">Home</a>
                    <span class="crumbs-span">/</span>
                    <a href="#">Questions</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">This is my first Question</span>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</div><!-- End breadcrumbs -->
<?php
include ('config.php');
$statement1= $db->prepare("SELECT * FROM question_tbl WHERE id=?");
$statement1->execute(array($result['q_id']));
$result1= $statement1->fetchAll(PDO::FETCH_ASSOC);
foreach($result1 as $row1)
{
    $eques =$row1;
}

?>
<section class="container main-content">
    <div class="row">
        <div class="col-md-9">
            <article class="question single-question question-type-normal">
                <h2>
                    <a href="single_question.html"><?php echo $eques['title']; ?>
                        </a>
                </h2>
                <div class="question-inner">
                    <div class="clearfix"></div>
                    <div class="question-desc">
                        <p>
                            <?php echo $eques['q_description']; ?>

                        </p>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </article>



            <div   class="comment-respond page-content clearfix">
                <div class="boxedtitle page-title"><h2>Your Answer</h2></div>
                <form action="store/EditAnswer.php" method="post" id="commentform" class="comment-form">

                    <div id="respond-textarea">
                        <p>

                            <textarea id="summernote" name="u_answer"  cols="58" rows="8"><?php echo $result['u_answer']; ?></textarea>

                            <script type="text/javascript">



                                $(document).ready(function() {
                                    $('#summernote').summernote({
                                        height: "200px"
                                    });
                                });

                            </script>
                        </p>
                    </div>
                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" value="Update your answer" class="button small color">
                    </p>
                         <input type="hidden" name="answer_id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="question_id" value="<?php echo $result['q_id']; ?>">

                </form>
            </div>


        </div><!-- End main -->


<?php include('includs/footer.php'); ?>