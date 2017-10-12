 <?php
     include ("../vendor/autoload.php");
     use App\answer\answer;
     $ans=new answer();
     $ans->addAnswer($_POST)->storeAnswer();
     ?>