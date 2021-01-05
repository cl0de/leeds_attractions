
<?php include "includes/page-start.php"; 
define("TITLE", "Favorites Type");
?>


<!DOCTYPE html>

<?php
include "includes/head.php";
?>

<?php
	///select all records from Attraction table, Rating from attr_rating table  and TypeName from Type table
	//this uses two INNER JOIN which combines three tables in one sql query
	//in this case the two tables attraction and attr_rating are
	//joined through the AttractionID fields which exist in both tables and
	//Type and attraction tables are joined through Type ID which is common field in both tables
	
	$sql = "SELECT Attraction.*, attr_rating.Rating, Type.TypeName";
    $sql =. "FROM Attraction ";
    $sql =. "INNER JOIN attr_rating ON attraction.AttractionID = attr_rating.AttractionID ";
    $sql =. "INNER JOIN Type ON Attraction.Type=Type.TypeID";
    $sql =. "GROUP BY TypeID"; 
    $sql =. "ORDER BY Rating DESC ";
	
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
			<h2>Your Favourite Attractions by Type</h2>	
			
			<?php while ($row = mysqli_fetch_array($result)) 
	{
		echo ' 		<h3><a href="">' . $row['TypeName'] . '</h3>';
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
