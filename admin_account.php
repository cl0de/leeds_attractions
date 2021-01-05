<?php 
session_start();
 include "includes/page-start.php"; 
define("TITLE", "Admin Login");
?>

<!DOCTYPE html>
<?php include "includes/head.php"; ?>

<body>
	<div class="page">

		<article>
			

<h2>Admin Login</h2>
<form action="" method="POST">
Admin Username: <input type="text" name="admin_name"><br />
Admin Password: <input type="password" name="admin_pass"><br />	
<input type="submit" value="Login" name="admin_login" />
</form>

<?php
		if(isset($_POST["admin_login"])){

		if(!empty($_POST['admin_name']) && !empty($_POST['admin_pass'])) {
			$admin_name=$_POST['admin_name'];
			$admin_pass=$_POST['admin_pass'];

			$admin_query=("SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_pass='$admin_pass'");
			$res=mysqli_query($con, $admin_query);
			$numrows=mysqli_num_rows($res);
			if($numrows>0)
			{
				echo "<script>window.open('view-users.php', '_self')</script>";
			}else{
				echo "Please enter correct details!";
			}

			
		}
		}
?>
<?php
		include"includes/footer.php";
		?>

</body>
</html>
<?php include "includes/page-end.php"; ?>