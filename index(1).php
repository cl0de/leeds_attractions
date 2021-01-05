<?php include "includes/page-start.php"; 
define("TITLE", "Home");
?>

<!DOCTYPE html>
<?php
			//select all records from Type table and resolve the Attraction image
			//in this case the two tables are 'Type' and 'Attraction' and they are
			//joined through the Type ID fields which exist in both tables
						
			$myQuery  = "SELECT Attraction.*, Type.TypeName ";
			$myQuery .= "FROM Attraction ";
			$myQuery .= "INNER JOIN Type ON Attraction.Type = Type.TypeID ";
			$myQuery .= "ORDER BY RAND() LIMIT 6";
			//run query
			$result = $con->query($myQuery);
			if (!$result) die('Query error: ' . mysqli_error($result));
?>
           
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
			<?php include "includes/header.php"; ?>			
		</header>
		<div id="slider" >						 
				<ul class="pgwSlider">
									
					<li><img src="images/yorkshire-valley-s.jpg" alt="Yorkshire Dale" data-large-src="images/yorkshire-valley.jpg" data-description="Historic buildings in the Yorkshire Dales are highlighted in all their glory"></li>

					<li><img src="images/white-rose-s.jpg" alt="White Rose Shopping Centre" data-large-src="images/white-rose.jpg" data-description="Its name is from the White Rose of York, the traditional symbol of Yorkshire."></li>

					<li><img src="images/leeds-arena-s.jpg" alt="First Direct Arena" data-large-src="images/leeds-arena.jpg" data-description="A 13,500 capacity entertainment focused arena in Leeds"></span>
				</ul>			
		</div>				
		<article>
			<h1>Welcome to Leeds</h1>
			<p> Immerse yourself in Leeds' culture: its renowned museums, 
				monuments and concert halls offer a choice broad enough to suit all tastes, 
				and if you happen to combine a passion for horticulture with an interest in architecture, 
				the fine parks and gardens in Leeds' chateaux will not disappoint you.</p>
			<!-- <p><a href="#map"> <input type="button" class="submit" value="Leeds Map "></a></p> -->
			<div id="gallery_container">    
				<div id="gallery">
				<div class="gallery_img"><img src="images/new/Event_Leeds_1.jpg" /> </div>
				<div class="gallery_img"><img src="images/new/Event_Leeds_5.jpg" /> </div>
				<div class="gallery_img"><img src="images/new/Event_Leeds_4.jpg" /> </div>
				<div class="gallery_img"><img src="images/new/Event_Leeds_6.jpg" /> </div>
				<div class="clear"></div>
				</div>
				<div class="clear"></div>				
			</div>
		</article>		
		<aside>
			<div>
				<h2>What's on?</h2>
					 
						<ul class="whatson " style="list-style-type:square">
							<?php
								//query  Newrly added events rows.
								$myQuery  = "SELECT events.*";
								$myQuery .= "FROM events ";
								$myQuery .= "ORDER BY Date DESC LIMIT 3 ";

								//run query
									$whatson_result = $con->query($myQuery);
									if (!$whatson_result) die('Query error: ' . mysqli_error($whatson_result));

									while ($rows = mysqli_fetch_array($whatson_result))
									{
										//create a substring for the summary
										$summary = $rows['Summary'];
										$summarydisplay = substr($summary, 0, 40);
										$date = date_create($rows['Date']);
										
										echo ' 	<li >';
										echo ' 		<div id= "thumb_date">'.date_format($date, 'l jS F Y') .'</div>';
										echo ' 		<div id="thumb_text">';
										echo '           <a href="event-details.php?ID='. $rows['EventID']. '">';									
										echo '				<h4>' . $rows['Title'] . '</h4>';
										echo '			 </a>';
										echo ' 				<p>' . $summarydisplay . '...</p>';
										echo ' 		</div>';
										echo ' 	</li>';
										echo '  <hr>';
									}
								?>
							</ul>
			</div>				
		</aside>
		<section class="attraction_container">
			<h2>Attractions</h2>			
		<?php 
			
			while ($row = mysqli_fetch_assoc($result)) { 
				//generate the HTML code to display details of an attraction
				echo '		<div class="attraction">';		
		echo '			<a href="details.php?ID='. $row['AttractionID']. '"><img src="' . $row['ImageUrl'] . '"/>';
		echo '			</a>';		
		echo ' 		 <h3><a href="details.php?ID='. $row['AttractionID']. '">' . $row['Name'] . '</a></h3>';
		echo '				<p>' . substr($row['Summary'],0,100). '...</p>';				
		echo '				</div>'; 
		}
		?>			
		</section>	
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
