<?php include('includs/header.php'); ?>
 <div class="breadcrumbs">
     <section class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1>Login</h1>
             </div>
             <div class="col-md-12">
                 <div class="crumbs">
                     <a href="#">Home</a>
                     <span class="crumbs-span">/</span>
                     <a href="#">Pages</a>
                     <span class="crumbs-span">/</span>
                     <span class="current">Login</span>
                 </div>
             </div>
         </div><!-- End row -->
     </section><!-- End container -->
 </div><!-- End breadcrumbs -->

<section class="container main-content">
    <div class="login">
        <div class="row">
            <div class="col-md-6">
                <div class="page-content">
                    <?php
                    session_start();
                    if(isset($_SESSION['Message'])){
                        echo $_SESSION['Message'];
                        unset ($_SESSION['Message']);
                    }
                    ?>
                    <h2>Login</h2>
                    <div class="form-style form-style-3">

                        <form action="store/login_proces.php" method="post">

                            <div class="form-inputs clearfix">
                                <p class="login-text">
                                    <input type="text" name="username" placeholder="username">
                                     <i class="icon-user"></i>
                                </p>
                                <p class="login-password">
                                    <input type="password" name="password" placeholder="password">
                                     <i class="icon-lock"></i>
                                 </p>
                            </div>
                            <p class="form-submit login-submit">
                                <input type="submit" value="Log in" class="button color small login-submit submit">
                            </p>


                    </form>

                </div>
            </div><!-- End page-content -->
        </div><!-- End col-md-6 -->
        <div class="col-md-6">
            <div class="page-content">
                <h2>Register Now</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
                <a class="button small color signup">Create an account</a>
            </div><!-- End page-content -->
        </div><!-- End col-md-6 -->
    </div><!-- End row -->
    </div><!-- End login -->
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
        <div class="copyrights f_left">Copyright &copy; LEBS CODING 2017 | <a href="#">lebscoding.com</a></div>
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