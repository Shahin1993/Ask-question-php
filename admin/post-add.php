
<?php
session_start();

if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div class='error'>Please login and try again </div>";

    header("location:../login.php");
}

?>

<?php include("header.php"); ?>
<?php
//session_start();
if(!empty($_SESSION['Message']))
{
    echo $_SESSION['Message'];
    unset ($_SESSION['Message']);

}
?>
<h2>Add new question</h2>

<form action="../store/Question.php" method="post" enctype="multipart/form-data">
    <table class="tbl1">
        <tr>
            <td>Title</td>
        </tr>
        <tr>
            <td><input type="text" name="q_title"/></td>
        </tr>
        <tr>
            <td>Question</td>
        </tr>
        <tr>
            <td> <textarea name= "q_description" id="summernote" cols="20" rows= "22"></textarea>
                <script type= "text/javascript">



$(document).ready(function() {
    $('#summernote').summernote({
        height: "200px"
    });
});
var postForm = function() {
    var content = $('textarea[name="content"]').html($('#summernote').code());
}     </script></td>
        </tr>
        <tr>
            <td><input type="submit" name="add_question" value="post-question"></td>
        </tr>
    </table>

</form>
<?php include("footer.php"); ?>