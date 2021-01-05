<?php
$startYear = 2014;
$thisYear = date('Y');
if ($thisYear > $startYear){
	$copyright = "$startYear&ndash;$thisYear";
}else{
	$copyright = $startYear;
}
?>

<footer>			
			<span class="copy">&copy; <?php echo $copyright;?> Leeds Tourist Attractions</span>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>	
			</ul>
		</footer>
	</div>
<!-- jQuery library -->
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
 <!--jQuery UI accordion-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script>
	$(function() {
		$( "#accordion" ).accordion({
			collapsible:true
			});
		});
	</script>
<!-- Slider plugin-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<script src="pgwslider/pgwslider.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
</script>
<!-- navbar small screen-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 480 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		
	</script>

