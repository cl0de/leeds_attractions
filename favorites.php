<?php include "includes/page-start.php"; 
define("TITLE", "Favorites");
?>


<!DOCTYPE html>

<?php
include "includes/head.php";
?>

<?php
	//select all records from Attraction table and Rating from attr_rating table
	//this uses an INNER JOIN which combines two tables in one sql query
	//in this case the two tables are 'Attraction' and 'attr_rating' and they are
	//joined through the AttractionID fields which exist in both tables
	
	
	$myQuery = "SELECT Attraction.*, attr_rating.Rating ";
	$myQuery .= "FROM Attraction "; 
	$myQuery .= "INNER JOIN attr_rating ON attraction.AttractionID = attr_rating.AttractionID "; 
	$myQuery .= "GROUP BY Attraction.AttractionID ";
	$myQuery .= "ORDER BY Rating DESC LIMIT 6 ";
	
	//run query
	$result = $con->query($myQuery);
	if (!$result) die('Query error: ' . mysqli_error($result));
?>
<body>
	<div class="page">
		<header>
			
			<nav class="clearfix">
				
				<?php
				//insert menu
				echo build_menu(4);
				?>
				
			</nav>	
			<?php include "includes/header.php"; ?>
			
		</header>
	<hr>
		
		<article>
			<h2>Your Favourite Attractions</h2>	
			
			<?php while ($row = mysqli_fetch_array($result)) 
	{
		//generate the HTML code to display favorites attractions
		
		echo '			<img src="' . $row['ImageUrl'] . '"/>';
		echo '			<div class="attr_rating"><p>Rating: ' .$row['Rating'].'/5</p></div>';
		echo '				<h4><a href="details.php?ID='. $row['AttractionID']. '">' . $row['Name'] . '</a></h4>';
		echo '				<p>' . $row['Summary'] . '</p>';				
		echo '				<hr>'; 
	
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

		<!--<a name="map"></a>-->	

		<section id="holder">
<?php include"includes/footer-upper.php"; ?>
</section>	
		<?php
		include"includes/footer.php";
		?>
</body>
</html>
<?php include "includes/page-end.php"; ?>
