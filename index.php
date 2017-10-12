<?php
error_reporting(0);
session_start();
include("vendor/autoload.php");
use App\question\question;
use App\answer\answer;
$obj2=new answer();
$result4=$obj2->getAlldata();


$obj=new question();
$result=$obj->getquestion();
?>


<?php include('includs/header.php'); ?>

    <div class="section-warp ask-me">
        <div class="container clearfix">
            <div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
                <div class="row">

                    <?php

                    if(isset($_SESSION['Message'])){
                        echo $_SESSION['Message'];
                        unset ($_SESSION['Message']);
                    }
                    ?>

                    <div class="col-md-3">
                        <h2>Welcome to LEBS CODING</h2>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                        <div class="clearfix"></div>

                    </div>
                    <div class="col-md-9">

                            <p>
                                 <img src="images/333.jpg" alt="images" height="200px" >


                            </p>
                        </form>
                    </div>
                </div><!-- End row -->
            </div><!-- End box_icon -->
        </div><!-- End container -->
    </div><!-- End section-warp -->


    <section class="container main-content">
        <div class="row">
            <div class="col-md-9">

                <div class="tabs-warp question-tab">
                    <ul class="tabs">
                        <li class="tab"><a href="#" class="current">Recent Questions</a></li>

                    </ul>
                    <div class="">
                        <div class="">

                            <?php foreach($result as $question)
                            { ?>
                            <article class="question question-type-normal">
                                <h2>
                                    <a href="single_question.php?id=<?php echo $question['id']; ?>"><?php echo $question['title'] ?></a>
                                </h2>

                                <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                <div class="question-author">
                                    <a href="#" original-title="<?php echo $question['username']; ?>" class="question-author-img tooltip-n"><span></span>

                                        <?php


                                        include ('config.php');
                                        $statement= $db->prepare("SELECT * FROM user_tbl WHERE username=?");
                                        $statement->execute(array($question['username']) );
                                        $result= $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $man)
                                        {
                                            $user=$man;
                                        }
                                        $gravatarMd5 = md5($user['email'] );
                                        ?>
                                        <img src="http://www.gravatar.com/avatar/<?php echo $gravatarMd5; ?>" alt= "" width= "80" height="80">
                                    </a>


                                </div>

                                <div class="question-inner">
                                    <div class="clearfix"></div>
                                    <p class="question-desc">
                                        <?php

                                        $piceces=explode(" ",$question["q_description"]);
                                        $final_words=implode(" ",array_splice($piceces, 0, 50) );

                                        $final_words=$final_words.'...';

                                        echo $final_words; ?> <a href="single_question.php?id=<?php echo $question['id']; ?>">read more</a></p>
                                    </p>
                                    <div class="question-details">
                                        <span class="question-answered question-answered-done"><i class="icon-ok"></i>

                                          Solved


                                            
                                        </span>
                                        <span class="question-favorite"><i class="icon-star"></i>
                                            <?php
                                            foreach($result4 as $count)
                                            {
                                            }
                                            include("config.php");

                                            $statement= $db->prepare("SELECT * FROM answer_tbl WHERE q_id=?");
                                            $statement->execute(array($question['id']));
                                            $row= $statement->rowCount();
                                            echo $row;
                                            ?>
                                                       Persons

                                        </span>
                                    </div>


                                    <span class="question-comment"><a href="single_question.php?id=<?php echo $question['id']; ?>"><i class="icon-comment">


                                            </i> Answers</a>

                                    </span>

                                    <div class="clearfix"></div>
                                </div>
                            </article>
                            <?php } ?>


                        </div>
                    </div>
                </div><!-- End page-content -->
            </div><!-- End main -->

    <?php include('includs/footer.php'); ?>