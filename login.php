<?php 
session_start();
 include "includes/page-start.php"; 
define("TITLE", "Login");
?>

<!DOCTYPE html>
<?php include "includes/head.php"; ?>

<body>
	<div class="page">

		<article>
			<h2> Please Login!</h2>
	

<form action="" method="POST">
Username: <input type="text" name="username"><br />
Password: <input type="password" name="password"><br />	
<input type="submit" value="Login" name="submit" />
</form>
<p>If not registered <a href="register.php"> Please Register</a></p>
<?php
		if(isset($_POST["submit"])){

		if(!empty($_POST['username']) && !empty($_POST['password'])) {
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$query=("SELECT * FROM user WHERE DisplayName='$user' AND Password='$pass'");
			$r=mysqli_query($con, $query);
			$numrows=mysqli_num_rows($r);
			if($numrows!=0)
			{
				while($row=mysqli_fetch_assoc($r))
				{
					$dbusername=$row['DisplayName'];
					$dbpassword=$row['Password'];
					}

					if($user == $dbusername && $pass == $dbpassword)
						{
						
						$_SESSION['sess_user']=$user;
			
						// Redirect to another page
						header("Location: user_account.php");
					}
			} else {
			echo "Invalid email or password!";
			}

		} else {
			echo "All fields are required!";
		}
	}
?>

		<?php
		include"includes/footer.php";
		?>
</body>
</html>