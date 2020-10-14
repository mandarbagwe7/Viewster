<?php
require_once("includes/header.php");
require_once("includes/classes/SearchResultsProvider.php");


if (!isset($_GET["term"]) || $_GET["term"] == "") {
	echo "no search term entered";
	exit();
}

$term = $_GET["term"];

if(!isset($_GET["orderBy"]) || $_GET["orderBy"] == "views"){
	$orderBy = "views";
}

else{
	$orderBy = "uploadDate";
}


$searchResultsProvider = new SearchResultsProvider($con, $userLoggedInObj);
$videos = $searchResultsProvider->getVideos($term,$orderBy);


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
	?>