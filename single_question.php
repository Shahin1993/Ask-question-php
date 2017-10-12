
<?php
error_reporting();
include("vendor/autoload.php");
use App\question\question;
use App\answer\answer;

$obj=new  question();
$row=$obj->show($_GET['id']);

$obj1=new  answer();
$result=$obj1->getAlldata();

?>


<?php
//session_start();
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
					<h1><?php echo $row['title']; ?></h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="index.php">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Questions</a>
						<span class="crumbs-span">/</span>
						<span class="current"> </span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>
						<a href="single_question.html"><?php echo $row['title']; ?></a>
					</h2>
					<div class="question-inner">
						<div class="color"></div>
						<div class="question-desc">
							<p><?php echo $row['q_description']; ?>  </p>
						</div>


						<div  style="=color: green;font-weight: bold;"><h2> Total Answers:
                            <?php
                            foreach($result as $count)
                            {
                            }
                            include("config.php");

                            $statement= $db->prepare("SELECT * FROM answer_tbl WHERE q_id=?");
                            $statement->execute(array($count['q_id']));
                            $row= $statement->rowCount();
                            echo $row;
                            ?>
                            </h2>
                        </div>
					</div>
				</article>


                <?php
                    foreach($result as $answer)
                { ?>
				
				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>Answers


                             <span class="color"></span> </h2></div>
					<ol class="commentlist clearfix">
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar">
<!--                                    --><?php
//                                    $gravatarMd5 = md5($answer['email'] );
//
//                                    ?>
                                    <?php


                                    include ('config.php');
                                    $statement= $db->prepare("SELECT * FROM user_tbl WHERE id=?");
                                    $statement->execute(array($answer['u_id']) );
                                    $result= $statement->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($result as $man)
                                    {
                                        $user=$man;
                                    }
                                             $gravatarMd5 = md5($user['email'] );
                                    ?>
                                    <?php


                                    ?>
                                    <img alt="" src="http://www.gravatar.com/avatar/<?php echo $gravatarMd5; ?>">
                                </div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#"><?php echo $user['username']; ?> </a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="icon-time"></i>

                                                <?php echo $answer['a_date']; ?>

                                                </div>
					                    </div>
					                    <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a> 
					                </div>
                                    <div class="text"><p><?php echo $answer['u_answer'];?>  </p></div>

									<div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
                                    <div class="question-answered question-answered-done"><i class="icon-ok"></i>
                                  <?php
                                  if(($_SESSION['userid']['id'])==$answer['u_id'])
                                  { ?>
                                            <a href="answer_edit.php?id=<?php echo $answer['id']; ?>" >Edit</a>
                                  <?php }?>
                                        </div>
					            </div>
					        </div>
                        </li>
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
                <?php } ?>

				<div   class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>Answer Now


                        </h2></div>
				    <form action="store/AnswerProces.php" method="post" >

				        <div id="respond-textarea">
				            <p>

                                <textarea id="summernote" name="u_answer"  cols="58" rows="8" ></textarea>

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
				        	<input name="submit" type="submit" id="submit" value="Post your answer" class="button small color">
				        </p>
                        <input type="hidden" name="question_id" value="<?php echo $_GET['id']; ?>">

				    </form>
				</div>
				

			</div><!-- End main -->



            <aside class="col-md-3 sidebar">
                <div class="widget widget_stats">
                    <h3 class="widget_title">Stats</h3>
                    <div class="ul_list ul_list-icon-ok">
                        <ul>
                            <li><i class="icon-question-sign"></i>Questions ( <span>

                 <?php

                 include ('config.php');

                 $statement=$db->prepare("SELECT * FROM question_tbl ORDER BY id DESC ");
                 $statement->execute();
                 $row= $statement->rowCount();
                 echo $row;
                 ?>

                    </span> )</li>
                            <li><i class="icon-comment"></i>Answers ( <span>

                         <?php

                         include ('config.php');

                         $statement= $db->prepare("SELECT * FROM answer_tbl ORDER BY id DESC ");
                         $statement->execute();
                         $row= $statement->rowCount();
                         echo $row;
                         ?>
                    </span> )</li>
                        </ul>
                    </div>
                </div>


                <div class="widget">
                    <h3 class="widget_title">Recent Questions</h3>
                    <ul class="related-posts">
                        <li class="related-item">
                            <?php
                            $limit=2;
                            include ("config.php");
                            $statement= $db->prepare("SELECT * FROM question_tbl ORDER BY id DESC LIMIT  $limit");
                            $statement->execute();
                            $result= $statement->fetchAll(PDO::FETCH_ASSOC);?>

                            <?php
                            foreach ($result as $row)
                            {
                            ?>
                            <h3><a href="single_question.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title'];?> </a></h3>
                            <p>


                                <?php
                                $piceces=explode(" ",$row["q_description"]);
                                $final_words=implode(" ",array_splice($piceces, 0, 10) );

                                $final_words=$final_words.'...';

                                echo $final_words; ?>

                            </p>
                            <span><?php echo $row['p_date']; ?></span>
                        </li>
                    </ul>
                    <?php } ?>
                </div>

            </aside><!-- End sidebar -->
        </div><!-- End row -->
    </section><!-- End container -->

<footer id="footer">
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_contact">
                    <h3 class="widget_title">Where We Are ?</h3>
                    <p>BITM php traning we ar proud for bitm , this is good platform of new php learnar</p>
                    <ul>
                        <li>
                            <span>Address :</span>
                            lebs coding,Batch-48,group-6, BITM,kowranbazar, Dhaka, Egypt.
                        </li>
                        <li>
                            <span>Support :</span>Support Telephone No : 01516151478
                        </li>
                        <li>Support Email Account : shahin.chf@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget_title">Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="ask_question.php">Ask Question</a></li>
                        <li><a href="#">About</a></li>

                        <li><a href="user_profile.php">Users</a></li>
                        <?php
                        $row3=$_SESSION['userid'];
                        if(!empty($_SESSION['userid']))
                        {
                            ?>
                            <li><a href="logout.php">Logout</a><span> (<span><?php echo $row3['username']; ?></span>)</span></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget">
                    <h3 class="widget_title">Popular Questions</h3>
                    <ul class="related-posts">
                        <li class="related-item">
                            <h3><a href="#">This is my first Question</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                        <li class="related-item">
                            <h3><a href="#">This Is My Second Poll Question</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget widget_twitter">
                    <h3 class="widget_title">Latest Tweets</h3>
                    <div class="tweet_1"></div>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</footer><!-- End footer -->
<footer id="footer-bottom">
    <section class="container">
        <div class="copyrights f_left">Copyright &copy; Md Shahin Hossen 2017 | <a href="http://selb3.host22.com">lebscoding.com</a></div>
        <div class="social_icons f_right">
            <ul>
                <li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
                <li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
                <li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
                <li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
                <li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
                <li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
                <li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
            </ul>
        </div><!-- End social_icons -->
    </section><!-- End container -->
</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
<!--<script src="js/jquery.min.js"></script>--><!--close this for summernote-->
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/tags.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->

</body>
</html>