<?php
 include "includes/page-start.php";  

if(isset($_GET['attraction'], $_GET['rating'])){

	$attraction=(int)$_GET['attraction'];
	$rating=(int)$_GET['rating'];

	if(in_array($rating,[1, 2, 3, 4, 5])){

		$exists=mysqli_query($con,"SELECT AttractionID FROM attraction WHERE AttractionID= {$attraction}");
     $result= (mysqli_num_rows($exists))? true: false;
		if($exists){
			mysqli_query($con,"INSERT INTO attr_rating(AttractionID,Rating) VALUES ({$attraction}, {$rating})");
		}
	}

header('Location:details.php?ID='.$attraction);
}



?>
<?php include "includes/page-end.php"; ?>