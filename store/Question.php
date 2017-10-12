<?php
  include ('../vendor/autoload.php');
  use App\question\question;
  $aqs=new question();
  $aqs->addquestion($_POST)->storequestion();
  ?>