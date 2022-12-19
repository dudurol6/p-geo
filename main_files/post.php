<?php  
	if(!isset($_GET['post'])){
		header('Location: posty.php');
	}

	$postTitle = $_GET['post'];

	if($postTitle == 'czym_jest_geodezja'){ // 1
		define('title', 'PG - Czym jest geodezja');
		$postTitle = "Czym jest geodezja";
	}
    include("../includes/header.php");
?>

<main>

    <div class="main-welcome-text"><?php echo $postTitle; ?></div>
    <div class="main-box">

		<div class="main-elem column bg border">
	
			<img class="post-image" src="../posts/1/1-1.jpg">
			<img class="post-image" src="../posts/1/1-2.jpg">
			<img class="post-image" src="../posts/1/1-end.jpg">
			
		</div>

    </div>

</main>

<?php include('../includes/footer.php'); ?>