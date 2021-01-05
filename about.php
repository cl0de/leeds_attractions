<?php include "includes/page-start.php"; 
define("TITLE", "About Us");
?>

<!DOCTYPE html>

<?php
include "includes/head.php";
?>

<body>
	<div class="page">
		<nav class="clearfix">
				
				<?php
				//insert menu
				echo build_menu(2);
				?>
				
			</nav>	
			
		
		<article>
			<h1>About Leeds Tourists Attractions</h1>
			<p>Some text about Leeds Tourists Attractions</p>
			<p><a href="#map"> <input type="button" value="Leeds Map "></a></p>
		</article>
		<aside>
			<div>
			<h2>What's on?</h2>
			<?php include "includes/whatson.php"; ?> 
			</div>	
		</aside>
			
		
			
			
	
		<div class="clear"></div>

		<a name="map"></a>	

					
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
