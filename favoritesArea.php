<?php include "includes/page-start.php"; 
define("TITLE", "Favorites Area");
?>


<!DOCTYPE html>

<?php
include "includes/head.php";
?>

<?php
	//select all records from Attraction table, Rating from attr_rating table  and AreaName from Area table
	//this uses two INNER JOIN which combines three tables in one sql query
	//in this case the two tables attraction and attr_rating are
	//joined through the AttractionID fields which exist in both tables and
	//Area and attraction tables are joined through Area ID which is common field in both tables
	
	$sql = "SELECT Attraction.*, attr_rating.Rating, Area.AreaName";
    $sql .= "FROM Attraction";
    $sql .= "INNER JOIN attr_rating ON attraction.AttractionID = attr_rating.AttractionID ";
    $sql .= "INNER JOIN Area ON Attraction.Area=Area.AreaID";
    $sql .= "GROUP BY AreaID" ;
    $sql .= "ORDER BY Rating DESC ";
	
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
				echo build_menu(4);
				?>
				
			</nav>	
			<?php include "includes/header.php"; ?>
			
		</header>
	<hr>
		
		<article>
			<h2>Your Favourite Attractions by Area</h2>	
			
			<?php while ($row = mysqli_fetch_array($result)) 
	{
		//generate the HTML code to display favorites attractions by Area Name
		
		echo ' 		<h3><a href="">' . $row['AreaName'] . '</h3>';
		echo '			<img src="' . $row['ImageUrl'] . '"/>';
		echo '			<p>Rating: ' .$row['Rating'].'/5</p>';
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
