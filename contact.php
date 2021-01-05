<?php include "includes/page-start.php"; 
define("TITLE", "Contact Us");
?>
<?php
$username ="";
if(isset($_POST['submit'])) {
	//form was submitted
	$username = $_POST['username'];
	$password = $_POST['password'];
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
				echo build_menu(5);
				?>
				
			</nav>	
			<?php include "includes/header.php"; ?>
			
		</header>
		<hr>
		
		<article>
			<h2> Get in touch with us!</h2>
					
		<form method="post" action="contact.php" id="contact">
        
     		<label for="name">Your Name</label>
     		<input type="text" name="name" value="Type Here" class="field" width="100px;">
     		<br />
            <label for="email">Your Email</label>
            <input type="text" name="email"  value="Type Here" class="field">
            <br />
            <label for="phone">Your Contact Number</label>
            <input type="text" name="phone"  value="Type Here" class="field">
              <br />         
            <label for="message">Message</label>
            <textarea name="message" value="Type Here" id="message" cols="15" rows="10"></textarea>
            
              <br /> 		
    		<input class="submit"  name="submit" type="submit" value="Send message">
        
</form>
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
