<?php
	//connect to mysql
	$con = mysqli_connect("localhost","wd","wd","leedsattractions") 
	       or die("Cannot connect to database: " . mysqli_error($con));
	//load western character set
	$con->set_charset("utf8");       
?>