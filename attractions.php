<?php include "includes/page-start.php"; 
define("TITLE", "Attractions");
?>

<!DOCTYPE html>

<?php
include "includes/head.php";
?>
<?php
	//select all records from Attraction table 
		
	$sql = "SELECT * FROM attraction ";
	
	//run query
	$result = $con->query($sql);
	if (!$result) die('Query error: ' . mysqli_error($result));
	
	
?>
<body>
	<div class="page">
		<header>
			
			<nav class="clearfix">
				
				<?php
				//insert menu
				echo build_menu(2);
				?>
				
			</nav>	
			<?php include "includes/header.php"; ?>
			
		</header>
	<hr>
		<article>
			<h2>List of Attractions</h2>	
			
			<?php while ($row = mysqli_fetch_array($result)) 
	{
		//generate the HTML code to display list of an attractions
		echo '		<div>';
		echo ' 		<h3><a href="details.php?ID='. $row['AttractionID']. '">' . $row['Name'] . '</h3>';
		echo '			<img src="' . $row['ImageUrl'] . '"/>';
		echo '			</a>';
		echo '				<p>' . $row['Summary'] . '</p>';				
		echo '           <hr>';
		echo '		</div>';
				
			
	}
			
			
	?>	
		</article>
		<aside>
			<div>
			<h2>What's on?</h2>
			<?php include "includes/whatson.php"; ?> 
			</div>	
		</aside>
		<div class="clear"></div>

		<a name="map"></a>	
			
<section id="holder">
<?php include"includes/footer-upper.php"; ?>
</section>	
		<?php
		include"includes/footer.php";
		?>
</body>
</html>
<?php include "includes/page-end.php"; ?>