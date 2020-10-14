<?php 
require_once("includes/config.php"); 
require_once("includes/classes/User.php"); 
require_once("includes/classes/Video.php"); 
require_once("includes/classes/VideoGrid.php"); 
require_once("includes/classes/VideoGridItem.php"); 
require_once("includes/classes/VideoGridIndex.php"); 
require_once("includes/classes/VideoGridItemIndex.php"); 

$usernameLoggedIn = isset($_SESSION["userLoggedIn"]) ? $_SESSION["userLoggedIn"] : "";
$userLoggedInObj = new User($con, $usernameLoggedIn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>ViewSter - Give Your TV a Break</title>
    <link rel = "icon" type = "image/png" href = "assets/images/icons/netflix_logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="assets/js/commonActions.js"></script>

</head>
<body background="assets/images/icons/sitebg.jpg">
    
    <div id="pageContainer">

        <div id="mastHeadContainer">
            <button class="navShowHide">
                <img src="assets/images/icons/menu.png">
            </button>

            <a class="logoContainer" href="index.php">
                <img src="assets/images/icons/netflixlogo.png" title="logo" alt="Site logo">
            </a>

            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" class="searchBar" name="term" placeholder="Search...">
                    <button class="searchButton">
                        <img src="assets/images/icons/search.png">
                    </button>
                </form>
            </div>

            <div class="rightIcons">
                <a href="upload.php">
                    <img class="upload" src="assets/images/icons/upload.png">
                </a>
				<a href="SignIn.php">
                    <img class="upload" src="assets/images/profilePictures/default.png">
                </a>
            </div>

        </div>

        <div id="sideNavContainer" style="display:none;">
            
			<div class="dropdown">
				<button class="dropbtn">By Type</button>
				<div class="dropdown-content">
					<a href="series.php">Series</a>
					<a href="movie.php">Movies</a>
				</div>
			</div> 
			<div class="dropdown">
            <button class="dropbtn">By Genre</button>
				<div class="dropdown-content">
						<a href="comedy.php">Comedy</a>
						<a href="action.php">Action/Adventure</a>
						<a href="horror.php">Horror</a>
						<a href="kids.php">Kids/Animation</a>
						<a href="scifi.php">Sci-Fi</a>
						<a href="knowledge.php">Knowledge</a>
						<a href="romance.php">Romance</a>
                        <a href="educational.php">Educational</a>
				</div>
			</div>
            <div class="dropdown">
	            <button class="dropbtn" onclick="location.href='trending.php'">Trending</button>
            </div>
            <div class="dropdown">
	            <button class="dropbtnLogOut" onclick="location.href='logout.php'">Logout</button>
            </div>
           </div> 
            

        <div id="mainSectionContainer">
        
            <div id="mainContentContainer">