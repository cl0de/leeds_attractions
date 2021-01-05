<?php include "includes/page-start.php"; 
define("TITLE", "Details");
//get details of attraction
			$myQuery  = "SELECT Attraction.*, Type.TypeName ";
			$myQuery  .= "FROM  Attraction ";
			$myQuery  .= "INNER JOIN Type ";
			$myQuery  .= "ON Attraction.Type = Type.TypeID ";
			$myQuery  .= "WHERE AttractionID=".$_GET['ID'];

//attraction rating	
		$attraction=null;
		if(isset($_GET['ID'])){
			$id=(int)$_GET['ID'];
			$attraction = mysqli_query($con,"SELECT Attraction.*, AVG(attr_rating.rating) AS rated 
			FROM Attraction 
			LEFT JOIN attr_rating ON Attraction.AttractionID = attr_rating.AttractionID
			WHERE attraction.AttractionID={$id}" );
			$attr_row=mysqli_fetch_assoc($attraction);
}

?>
<!DOCTYPE html>
<?php include "includes/head.php"; ?>		
<body>
	<div class="page">
		<header>
			<nav class="clearfix">
				<?php
				//insert menu
				echo build_menu(1);
				?>
			</nav>	
				<?php
				require "includes/header.php";
				?>
	
		</header>
		<hr>		
		<aside>
			<div>
			<h2>What's on?</h2>
			<?php include "includes/whatson.php"; ?> 
			</div>	
		</aside>
		<article>	
			<?php
				//run query
				$result = $con->query($myQuery);			
				if (!$result) die('Query error: ' . mysqli_error($result));
				while ($row = mysqli_fetch_assoc($result)){
				//generate the HTML code to display details of an attraction
									
				echo ' 		 <h2><a href="details.php?ID='. $row['AttractionID']. '">' . $row['Name'] . '</a></h2>';
				echo '			<img src="' . $row['ImageUrl'] . '"/>';
				echo '			<p>' . $row['Description'] . '</p>';
				echo '        <hr>';
				echo '          <div class="attr_info">';
				echo '              <div><b>Opening Times : </b><br />' .$row['OpeningHours'].'</div><hr>';	
				echo '                <div><b>Full Address : </b><br />' .$row['Address']." ". $row['Postcode'] ."<br />Telephone: ". $row['Telephone'] ."<br />Email:" . $row['Email']."<br />Website: ". $row['Website'] .'</div>';
				echo '                 <div><b>Video : </b><br />'.$row['VideoEmbed'] . '</div><hr>'; 
}						
				?><!--Attraction rating -->
				   		<div> 
		 	    			<?php if($attraction): ?>
					            <div id="ratings">
						 		<div class="attr_rating">Rating: <?php echo round($attr_row['rated']);?>/5 </div> 
						 		<div class="attr_rate">Rate this attraction:
					 		<?php foreach (range(1, 5) as $rating): ?> 
									<a href="rate.php?attraction=<?php echo $id; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
				       		<?php endforeach; ?>
								</div>
							</div>
					 		<?php endif; ?>
				     	</div>
				     </div>
		<?php ?>	     
	</article>
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
