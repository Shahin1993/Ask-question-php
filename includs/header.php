
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Jiggasa </title>
    <meta name="description" content="Ask me Responsive Questions and Answers Template">
    <meta name="author" content="2code.info">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Skins -->
    <link rel="stylesheet" href="css/skins/skins.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="http://2code.info/demo/html/ask-me/images/favicon.ico">

<!----summernote--->
   <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <link href="summernote/dist/summernote.css" rel="stylesheet">
    <script src="summernote/dist/summernote.min.js"></script>

    <!-- include summernote-ko-KR -->
    <script src="summernote/lang/summernote-ko-KR.js"></script>

</head>
<body style="background-color: #f3f3f3;color: #2f3239;-webkit-font-smoothing: antialiased;">

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap">

    <div class="panel-pop" id="signup">
        <h2>Register Now<i class="icon-remove"></i></h2>
        <div class="form-style form-style-3">
            <form action="store/signup_proces.php" method="post">
                <div class="form-inputs clearfix">
                    <p>
                        <label class="required">Username<span>*</span></label>
                        <input type="text" name="username">
                    </p>
                    <p>
                        <label class="required">E-Mail<span>*</span></label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label class="required">Password<span>*</span></label>
                        <input type="password" name="password">
                    </p>

                </div>
                <p class="form-submit">
                    <input type="submit" value="Signup" class="button color small submit">
                </p>
            </form>
        </div>
    </div><!-- End signup -->



    <div id="header-top">
        <section class="container clearfix">

            <div class="header-search">
                <form>
                    <input type="text" value="Search here ..." onfocus="if(this.value=='Search here ...')this.value='';" onblur="if(this.value=='')this.value='Search here ...';">
                    <button type="submit" class="search-submit"></button>
                </form>
            </div>
        </section><!-- End container -->
    </div><!-- End header-top -->
    <header id="header">
        <section class="container clearfix">
            <div class="logo"><a href="index.html"><img alt="" src="images/logo.png" width="85px" height="85px"></a></div>
            <nav class="navigation">
                <ul>
                    <li class="current_page_item"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="ask_question"><a href="ask_question.php">Ask Question</a></li>

                    <li><a href="user_profile.php">User</a>
                        <ul>
                            <li><a href="user_profile.php">User Profile</a></li>
                            <li><a href="edit_profile.php">Edit Profile</a></li>
                        </ul>
                    </li>



                    <?php

                    if(empty($_SESSION['userid']))

                    { ?>

                        <li><a href="login.php">Login</a></li>

                    <?php } else{ ?>
                    <li><a href="logout.php">logout</a></li>

                    <?php } ?>


                    <?php
                    error_reporting(0);

                    if($_SESSION['userid']['is_admin']==1)
                    { ?>
                        <li><a href="admin/index.php">Admin</a></li>

                    <?php }?>
                    <?php

                    if(empty($_SESSION['userid']))

                    { ?>
                    <li><a class="color signup">Sign Up</a></li>
                    <?php }?>


                </ul>
            </nav>
        </section><!-- End container -->
    </header><!-- End header -->
