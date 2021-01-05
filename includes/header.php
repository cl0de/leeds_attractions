<?php include "includes/page-start.php"; ?>
<?php
//To find if search field is set and is not empty

if(isset($_POST['search']) && ($_POST['search'] !="") ){
	$search=$_POST['search'];
	
	$myQuery="SELECT * FROM attraction WHERE Name LIKE '%". $search ."%' OR Description  LIKE '%" . $search . "%' ";
	$res=mysqli_query($con,$myQuery);
	
	$count=mysqli_num_rows($res);
		if($count!==0){
			echo $count . 'results found:<br/>';
				while($row= mysqli_fetch_assoc($res)){
				echo '<h3>' .$row['Name'] . '</h3><p>' . $row['Summary']. '</p>';
				}
			
	}else{
		echo "0 result found";
	}
	
}

?>
 

<div id= "header-lower">
	<div id="logo"><a href="#">Leeds Tourist Attractions</a></div>
		<div id="header-lower-right">
			<div id="signup"><a href="login.php">Login</a> | <a href="register.php">Register</a>   |  <a href="admin_account.php">Admin Login</a></div>
			<div id="tel">Call us on :  <span><a href="tel://+1131234567">0113 123 4567</a></span></div>

			<div id="search">
		    	<form action="index.php" method="post">
						<input class="field" type="text" name="search" value="">
						<button type="submit" name="submit" class="submit">Search</button>
					</form>
				
			</div>
		</div>			
</div>

			