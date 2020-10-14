<?php
require_once("includes/header.php");
require_once("includes/classes/NavbarFunctionProvider.php");


$navbarFunctionProvider = new NavbarFunctionProvider($con, $userLoggedInObj);
$videos = $navbarFunctionProvider->getVideos(2);


$videoGrid = new VideoGrid($con , $userLoggedInObj);
?>

<div class="LargeVideoGridContainer">

	<?php
	if(sizeof($videos) > 0){
		echo $videoGrid->createLarge($videos, sizeof($videos) . " videos found", true);

	}
	else{
		echo("No results found");
	}

	require_once("includes/footer.php");
	?>