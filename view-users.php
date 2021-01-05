<?php include "includes/page-start.php"; 
define("TITLE", "List of all users");
//display deleted message
$message=null;
if(isset($_GET['deleted'])){
	$message = $_GET['deleted'];
}
	
?>

<!doctype html>
<?php
include "includes/head.php";
?>
<body>
<h1 align="center">Managing information of all users</h1>
<h2><?php echo $message; ?></h2>
<table width='800' align='center' border='5'>
	<tr bgcolor='#cccccc'>
		<th>No</th>
		<th>User Name</th>
		<th>User Email</th>
		<th>User Password</th>
		<th>Delete</th>
	</tr>
	<tr>
<?php 
$user_query= "SELECT * FROM user";
$r=mysqli_query($con,$user_query);
while($row=mysqli_fetch_array($r)){
	$user_id=$row['UserID'];
	$username=$row['DisplayName'];
	$email=$row['Email'];
	$password=$row['Password'];
	
?>
<td><?php echo $user_id; ?></td>
<td><?php echo $username;?></td>
<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><a href='delete.php?del=<?php echo $user_id; ?>'>Delete</a></td>
	</tr>
<?php } ?>

</table>
	
			<?php
			include"includes/footer.php";
			?>
</body>
</html>

<?php include "includes/page-end.php"; ?>