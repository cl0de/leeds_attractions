<?php 
session_start();
include "includes/page-start.php"; 
define("TITLE", "user_account.php");
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {

?>

<!DOCTYPE html>
<?php include "includes/head.php"; ?>

<body>
	<div class="page">

		<article>



<h3>Welcome, <?=$_SESSION['sess_user'];?> to your account!</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
</p>
</article>
<aside>
			<h4 text-align="center"><a href="logout.php">Logout</a></h4>
	</aside>
<?php
		include"includes/footer.php";
		?>
</body>
</html>
<?php
}
?>

<?php include "includes/page-end.php"; ?>