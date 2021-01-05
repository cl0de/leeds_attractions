<?php include "includes/page-start.php"; 
define("TITLE", "Register");
?>

<!DOCTYPE html>
<?php include "includes/head.php"; ?>

<body>
	<div class="page">

		<article>
			<h2> Please Register Here!</h2>
			
	<form action="" method="POST" id="register">
		Username: 	<br /><input type="text" name="user" class="field"><br/>
		Email: 		<br /><input type="text" name="email"class="field"><br/>
		Password:   <br /><input type="password" name="pass" class="field"><br/>
		Post Code: <br/><input type="text" name="post" class="field"></br/>
			
		<br/><input type="submit" value="Register" name="submit" class="submit"/>
	</form>
<p>Already registered? <a href="login.php">Please Login</a></p>
<?php
if(isset($_POST["submit"])){
//Data sent from the form
	if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
		$user=$_POST['user'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$post=$_POST['post'];
		$query=("SELECT * FROM user WHERE Email= '$email'");
		$r=mysqli_query($con,$query);
		$numrows=mysqli_num_rows($r);
			if($numrows > 0) 
			{	
				echo "That email already exists! Please try again with another.";
			}else{
				$sql="INSERT INTO user(DisplayName, Email, Password, HomePostcode) VALUES('$user','$email','$pass','$post')";
				$result=mysqli_query($con,$sql);
					if($result)
					{
					echo "Account Successfully Created";
					} else {
						echo "There is error somewhere. Try again!";
						}
			}

		} else {
			 
			echo"<script>alert('All fields are required!')</script>";
			exit();
		}
}

?>
		</article>
		
		<?php
		include"includes/footer.php";
		?>
</div>
</body>
</html>
<?php include "includes/page-end.php"; ?>