<?php include "includes/page-start.php"; ?>
<?php
		//build menu and highlight current item
		function build_menu($current){
			
			//create HTML code line by line
$HTML ='';	
$HTML .='<ul class="clearfix">';
		if($current==1)
			{$HTML .='<li class="current">';}
			else
			{$HTML .='<li>';}
$HTML .='<a href="index.php">Home</a></li>';

		if($current==2)
			{$HTML .='<li class="current">';}
			else
			{$HTML .='<li>';}
$HTML .='<a href="attractions.php">Attractions</a><span class="darrow">&#9660;</span>'; 

$HTML .='						<ul class="sub1">';
$HTML .='							<li><a href="attractionsArea.php">By Area</a></li>'; 
$HTML .='                           <li><a href="attractionsType.php">By Type</a></li>';
$HTML .='							<li><a href="submenu3.php">SubMenu item</a></li>';
		
$HTML .='						</ul>';	
$HTML .='					</li>';

		if($current==3)
			{$HTML .='<li class="current">';}
			else
			{$HTML .='<li>';}
$HTML .='<a href="events.php">Events</a></li>';
		if($current==4)
			{$HTML .='<li class="current">';}
			else
			{$HTML .='<li>';}
$HTML .='<a href="favorites.php">Favorites</a><span class="darrow">&#9660;</span>';
$HTML .='						<ul class="sub1">';
$HTML .='							<li><a href="favoritesArea.php">By Area</a></li>';
$HTML .='							<li><a href="favoritesType.php">By Type</a></li>';
$HTML .='							<li><a href="submenu3.php">SubMenu item</a></li>';
$HTML .='						</ul>';	
$HTML .='                   </li>';
 		   if($current==5)
			{$HTML .='<li class="current">';}
			else
			{$HTML .='<li>';}
$HTML .='<a href="contact.php">Contact Us</a></li>';			
$HTML .='				</ul>';
$HTML .='          <a href="#" id="pull">Menu</a>';

//the function returns the complete HTML code for the menu
return $HTML;

}

?>