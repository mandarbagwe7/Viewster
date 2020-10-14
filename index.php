<?php require_once("includes/header.php"); ?>

<!--
<?php
/*if(isset($_SESSION["userLoggedIn"])) {
    echo "user is logged in as " . $userLoggedInObj->getName();;
}
else {
    echo "not logged in";
}*/
?>-->
<div class="HomePage">
    <div class="comedyHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Comedy', false,1);
    ?>
	</div>


	<div class="ActionHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Action and Adventure', false,2);
    ?>
	</div>

	<div class="HorrorHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Horror', false,3);
    ?>
	</div>


	<div class="KidsHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Kids/Animation', false,4);
    ?>
	</div>

	<div class="ScifiHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Sci-Fi', false,5);
    ?>
	</div>

	<div class="KnowledgeHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Knowledge', false,6);
    ?>
	</div>

	<div class="RomanceHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Romance', false,7);
    ?>
	</div>

    <div class="EductionalHome">
    <?php
    $videoGrid = new VideoGridIndex($con, $userLoggedInObj);
    echo $videoGrid->createForIndex(null, 'Eductional', false,8);
    ?>
	</div>

    
</div>


<?php require_once("includes/footer.php"); ?>
                