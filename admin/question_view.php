<?php
include("../vendor/autoload.php");
use App\question\question;

$obj=new question();
$result=$obj->getquestion();
?>

<?php
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
    <h2>View All user</h2>
    <table class="tbl2">
        <tr>
            <th>srieal no</th>
            <th>Q_Title</th>
            <th>Question Description</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        foreach ($result as $row)
        {
            $i++; ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $row['title']; ?>
                </td>
                <td>
                    <?php echo $row['q_description']; ?>
                </td>

                <td>
                    <a href="view_all.php?id=<?php echo $row['id']; ?> " >view</a> | edit |
                    &nbsp;<a onclick= 'return confirmDelete();' href= "question_delete.php?id=<?php echo $row['id']; ?>" >
                        Delete</a></td>
            </tr>
        <?php }?>
    </table>
    </table>
    </table>

<?php include("footer.php"); ?>