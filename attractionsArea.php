<?php include "includes/page-start.php"; 
define("TITLE", "Attractions by Area");
?>

<!DOCTYPE html>

<?php
include "includes/head.php";
?>
<?php
	//select all records from Attraction table and resolve the area name
	//this uses an INNER JOIN which combines two tables in one sql query
	//in this case the two tables are 'Attraction' and 'Area' and they are
	//joined through the Area ID fields which exist in both tables
	//result ordered attractions by area Name
	
	
$sql = "SELECT Attraction.*, Area.AreaName \n"
    .  "FROM Attraction \n"
    .  "INNER JOIN Area ON Attraction.Area=Area.AreaID \n"
    .  "ORDER BY AreaName";
	
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
			<h2>List of Attractions by Area</h2>	
		<?php
			$areaname = NULL;
			while ($row = mysqli_fetch_array($result)) 
			{
				if($row['AreaName'] != $areaname) {
						//generate the HTML code to display attractions by area
						$areaname = $row['AreaName'];
						echo ' 		<h3><a href="">' . $areaname. '</h3>';
						echo '           <hr>';
					}
						echo '			<img src="' . $row['ImageUrl'] . '"/>';
						echo '			</a>';
						echo '				<h4><a href="details.php?ID='. $row['AttractionID']. '">' . $row['Name'] . '</a></h4>';
						echo '				<p>' . $row['Summary'] . '</p>';				
						
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