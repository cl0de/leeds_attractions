<?php include "includes/page-start.php"; 
//define("TITLE", "Delete");
?>
<?php
$delete_id=$_GET['del'];
$del_query="DELETE FROM user WHERE UserID='$delete_id'";
$results=mysqli_query($con, $del_query);
if($results){
	echo "<script>window.open('view-users.php?deleted=User has been deleted!!!','_self')</script>";

}
?>


<?php include "includes/page-end.php"; ?>

