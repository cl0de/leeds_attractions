<?php include "includes/page-start.php"; 
define("TITLE", "Events");
?>
<!DOCTYPE html>
<?php
include "includes/head.php";
?>
<?php
									//query Newrly added events rows from table named events.
									//order results by field EventID
									$myQuery  = "SELECT events.*";
									$myQuery .= "FROM events ";
									$myQuery .= "ORDER BY EventID DESC ";

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
				echo build_menu(3);
				?>
				
			</nav>	
			<?php include "includes/header.php"; ?>
			
		</header>
	<hr>
		
		<article id="event_list">
			<h2>Highlight Events of Leeds</h2>	
			<?php while ($rows = mysqli_fetch_array($result))
									{
										//create a substring for the summary
										$summary = $rows['Summary'];
										$summarydisplay = substr($summary, 0, 40);
										$date = date_create($rows['Date']);
										
										echo ' 	<div class="event_item">';
										echo ' 		<div id= "thumb">';
										echo ' 		<a href=""><img src=" '. $rows['Image'] . '" alt="'.$rows['alt'].'" style="max-width:100%;height:auto;"/></a>';
										echo ' 		</div>';
										echo ' 		<div id="thumb_text">';
										echo '			<a href="event-details.php?ID='. $rows['EventID']. '">';
										echo '           <div>'.date_format($date, 'l jS F Y') .'</div>';									
										echo '				<h5>' . $rows['Title'] . '</h5>';
										echo ' 				<p>' . $summarydisplay . '...</p>';
										echo '			</a>';
										echo ' 		</div>';
										echo ' 	</div>';
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