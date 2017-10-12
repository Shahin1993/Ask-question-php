
<?php
include("../vendor/autoload.php");
use App\signup\signup;

$obj=new signup();
$result=$obj->getusers();
?>
<?php
if(empty($_SESSION['userid'])){
    $_SESSION['Message']="<div class='error'>Please login and try again </div>";

    header("location:../login.php");
}

?>
<?php include("header.php"); ?>
<h2>View All user</h2>
<table class="tbl2">
    <tr>
        <th>srieal no</th>
        <th>Name</th>
        <th>Email</th>
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
                <?php echo $row['username']; ?>
            </td>
            <td>
                <?php echo $row['email']; ?>
            </td>

            <td>
                <a href="view_all.php?id=<?php echo $row['id']; ?> " >view</a> | edit |
                &nbsp;<a onclick= 'return confirmDelete();' href= "user_delete.php?id=<?php echo $row['id']; ?>" >
                    Delete</a></td>
        </tr>
    <?php }?>
</table>
</table>
</table>

<?php include("footer.php"); ?>