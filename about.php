<?php
session_start();
if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div style='color: red;'>Please login and try again </div>";

    header("location:login.php");
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/newcss.css" type="text/css" />
           <link rel="stylesheet" href="css/screen.css">
          <style>#commentForm{width:500px;}#commentForm label{width:250px;}#commentForm label.error,#commentForm input.submit{margin-left:253px;}#myForm{width:670px;}#myForm label.error{margin-left:10px;width:auto;display:inline;}#newsletter_topics label.error{display:none;margin-left:103px;}</style>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 90%;
      margin: auto;
      height: 400px;
  }
  </style>

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        
         
            <nav class="navbar navbar-default">

                <ul class="nav navbar-nav">

                    <li><a href="index.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                
                <form class=" navbar-form navbar-right">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="search"/>
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                        
                    </button>
                    </div>
                    </div>
                </form>
                
            </nav>
        <div id="slidde">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                   <img src="images/11.jpg" alt="Apon Manus"  />
                   <div class="carousel-caption">
                       <h3>BITM</h3>
                       <p>Before Project presentation</p>
                   </div>
                   
                </div>
                <div class="item">
                    <img src="images/22.jpg" alt="Por manusi"  />
                    <div class="carousel-caption">
                        <h3>Shahin & Emtiaz</h3>
                        <p>My team member emtiaz vai (good look)</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/333.jpg" alt="Por manusi"  />
                    <div class="carousel-caption">
                        <h3>My Team Members</h3>
                        <p>Likhon, Emtiaz, Bably khan, Shahin</p>
                    </div>
                </div>
                <div class="item">
                    <img src="images/44.jpg" alt="third person"  />
                    <div class="carousel-caption">
                        <h3>BITM</h3>
                        <p>After Assesment all members Batch-48 </p>
                    </div>

                </div>
                
            </div> 
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" ></span>
                <span class="sr-only">Next</span>
            </a>
            
        </div>
            
        </div>
        <div class="well">
            <div class="container-fluid">
                <div class="page-header text-center">
                    <h1>Our Team Member</h1>
                </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="images/Shahin.jpg" class="img-responsive img-circle" alt="image21" />
                    <div class="caption text-center">
                        <h4>Md Shahin Hossen</h4>
                        <p> I am shhin. I completed Bsc in CSE from Atish Dipankar University of Science
                            And Technology.
                            One of the things I have found myself needing over and 
                            over again as I design websites  and develop this. my team member alaways
                            help me ,
                        </p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#mymodal2">
                            View Details...
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="images/Emtiaz.jpg" class="img-responsive img-circle" alt="imge31"/>
                    <div class="caption text-center">
                        <h4>D.M.Emtiaz Mahmud Nayem</h4>
                        <p>
                            I am Emtiaz. My nike name is nayem. I completed Bsc in CSE from East West University. I like friendly person.
                            My home district is Norsingdi. Our all team member is very friendly. And They all of them share with me.

                        </p>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mymodal3">View Details...</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="images/bably.jpg" class="img-responsive img-circle" alt="image41" />
                    <div class="caption text-center">
                        <h4>Bably Khan</h4>
                        <p>
                            I am Bably Khan. I study in Daffodil International University. My home district is Tangail.
                            I am a simple girl. I like simple life. I am website designer.
                            I Have completed Web Application Development-PHP training from BITM. Our all team member are very
                            friendly.
                        </p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#mymodal2">View Details...</a>
                           
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="images/Likhon.jpg" class="img-responsive img-circle" alt="image41" />
                    <div class="caption text-center">
                        <h4>Mohammad Rabiul Alam</h4>
                        <p>
                           I am Mohammad Rabiul Alam (Likhon). My nike name is Likhon. I am honest man. I like story.
                            I study Manarat International University. I live in Dhaka.
                            I Have completed Web Application Development-PHP training from BITM. Our all team member are very
                            friendly.
                        </p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#mymodal2">View Details...</a>

                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        
         <div class="modal fade" id="mymodal2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3>Modal headline</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            One of the things I have found myself needing over and 
                            over again as I design websites is "dummy text" or
                            "filler text", that looks like real content, that I
                            can use to fill up a page so it gives the client 
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="mymodal3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close"  data-dismiss="modal"">&times;</button>
                        <h4>head line two</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                             One of the things I have found myself needing over and 
                            over again as I design websites is "dummy text" or
                            "filler text", that looks like real content, that I
                            can use to fill up a page so it gives the client 
                        </p>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                    </div>
                </div>
            </div>
        </div><!----modal-->
        
        
        
         <div class="cotainer-fluid text-center">
            <div class="page-header">
                <h2>Our Future plan</h2>
            </div>
            <div class="btn-group">
                <a href="#mobile" class="btn btn-info btn-lg" data-toggle="tab">Love</a>
                  <a href="#tablat" class="btn btn-warning btn-lg" data-toggle="tab">Prem</a>
                    <a href="#laptop" class="btn btn-info btn-lg" data-toggle="tab">House</a>
                    
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="mobile">
                    <div class="tab-header">
                        <h3>gallary</h3>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/55.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/55.jpg" alt="" />
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/55.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/55.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                
                </div><!--tab pane-->
           
            <div class="tab-pane fade" id="tablat">
                    <div class="tab-header">
                        <h3>gallary</h3>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/21.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/21.jpg" alt="" />
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/21.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/21.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                
                </div><!--tab pane-->
                <div class="tab-pane fade" id="laptop">
                    <div class="tab-header">
                        <h3>gallary</h3>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/31.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/31.jpg" alt="" />
                            </a>
                        </div>
                        
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/31.jpg" alt="" />
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="thumbnail">
                                <img src="images/31.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                
                </div><!--tab pane-->
            </div>
            
            
        </div>
        
       
        <!--feedback-->
        <div class="well feedback">
        <div class="container-fluid">
            <div class="pag-header">
                <h1>feedback<small>clinet serice</small></h1>
            </div>
            <div class="row-fluid">
                <div class="col-md-4">
                    <blockquote>
                        <p>
                             One of the things I have found myself needing over and 
                            over again as I design websites is "dummy text" or
                           ike real content, that I
                    
                        </p>
                        <footer>Anik</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        <p>
                             One of the things I have found myself needing over and 
                            over again as I design websites is "dummy text" or
                           ike real content, that I
                    
                        </p>
                        <footer>sadik</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote>
                        <p>
                             One of the things I have found myself needing over and 
                            over again as I design websites is "dummy text" or
                           ike real content, that I
                    
                        </p>
                        <footer>Manik</footer>
                    </blockquote>
                </div>
            </div>
        </div><!---feedback-->
        </div>
        <div class="fft">
        <div class="row well">
            <div class="col-md-6"><img src="images/555.jpg" alt="image" height="300"> </div>
        <div class="col-md-6">
        <form action="store/signup_proces.php" method="post" id="myForm" class="form-horizotal">
            <fieldset>
            <div class="input-group">
                <label class="control-label" for="name">Username Name:</label>
                <div>
                    <input type="text" id="name" class="form-control" name="username" placeholder="enter your name"/>
                </div>
            </div>
                <div class="input-group">
                    <label class="control-label" for="email">Email:</label>
                    <div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="eamil..."/>
                        
                    </div>
                </div>
                  <div class="input-group"><label for="pass" class="control-label"  >Pssword:</label>
                   <div><input type="password" class="form-control" id="pass" name="password" placeholder="*********"/></div>
                  </div>

                    <div class="input-group">
                        <label for="cnfpass" class="control-label" >Conform Password:</label>
                        <div>
                        <input type="password" id="cnfpass"  class="form-control" name="cnfpass" placeholder="againg..."/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info" id="btn">Sing Up</button>

            </fieldset>
        </form>
        </div>
        </div>
        </div>
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
  <script>
     $(document).ready(function(){
        $("#myForm").validate({
             rules: {
                 username: "required",
                 email:
                         {
                     required:true,
                 },
                 password:{
                     required:true,
                     minlength:6
                 },
                 cnfpass:{
                     required:true,
                     minlength:6,
                     equalTo:"#pass"
                 }
             },
             messages:{
                 name:"please enter your valide name",
                 email:"Please enter your valide email"
             }
         }); 

     });
      
  </script>
            <footer id="footer-bottom" class="well text-center">

                <div class="copyrights ">Copyright &copy; Md Shahin Hossen- 2017 | <a href="http://selb3.host22.com">lebscoding.com</a>&nbsp; @@@@ Suport by: Emtiaz, Likhon, Bably</div>
                <!-- End social_icons -->
                <!-- End container -->
            </footer>
    </body>
</html>