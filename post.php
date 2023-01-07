<?php  
	if(!isset($_GET['post'])){
		header('Location: posty.php');
	}
	else{

		$postTitle = $_GET['post'];

		/*-----------------------------------------------------------------*/
		/*-----------------------------------------------------------------*/
		if($postTitle == 'czym_jest_geodezja'){ // 1
			define('title', 'PG - Czym jest geodezja');
			$postTitle = "Czym jest geodezja";
			$img[0] = "posts/1/1-1.jpg";
			$img[1] = "posts/1/1-2.jpg";
			$img[2] = "posts/1/1-end.jpg";
		}
		else if($postTitle == 'uprawnienia_zawodowe'){ // 2
			define('title', 'PG - Uprawnienia zawodowe');
			$postTitle = "Geodezyjne uprawnienia zawodowe";
			$img[0] = "posts/2/2-1.jpg";
			$img[1] = "posts/2/2-2.jpg";
			$img[2] = "posts/2/2-3.jpg";
			$img[3] = "posts/2/2-4.jpg";
			$img[4] = "posts/2/2-5.jpg";
			$img[5] = "posts/2/2-end.jpg";
		}
		else if($postTitle == 'jednostki_w_geodezji'){ // 3
			define('title', 'PG - Jednostki w geodezji');
			$postTitle = "Jednostki w geodezji";
			$img[0] = "posts/3/3-1.jpg";
			$img[1] = "posts/3/3-2.jpg";
			$img[2] = "posts/3/3-3.jpg";
			$img[3] = "posts/3/3-4.jpg";
			$img[4] = "posts/3/3-end.jpg";
		}
		else if($postTitle == 'sprzet_w_geodezji'){ // 4
			define('title', 'PG - Sprzęt w geodezji');
			$postTitle = "Sprzęt w geodezji";
			$img[0] = "posts/4/4-1.jpg";
			$img[1] = "posts/4/4-2.jpg";
			$img[2] = "posts/4/4-3.jpg";
			$img[3] = "posts/4/4-4.jpg";
			$img[4] = "posts/4/4-5.jpg";
			$img[5] = "posts/4/4-6.jpg";
			$img[6] = "posts/4/4-7.jpg";
			$img[7] = "posts/4/4-8.jpg";
			$img[8] = "posts/4/4-end.jpg";
		}

		/*-----------------------------------------------------------------*/
		/*-----------------------------------------------------------------*/
		else{
			header('Location: posty.php');
		}

    include("includes/header.php");

	}
?>

<main>

	<div class="sep-line"></div>
    <div class="main-welcome-text"><?php echo $postTitle; ?></div>
	<a class="post-a" href="posty.php" style="margin-bottom: 10px; margin-top: -20px"><div class="main-elem column border post-item">Powróć do wszystkich</div></a>
    <div class="main-box">

		<div class="main-elem row bg border">

			<?php
				for($n = 0; isset($img[$n]); $n++){
					echo '<img class="post-image" src="'.$img[$n].'">';
				}
			?>	

		</div>

    </div>

</main>

<?php include('includes/footer.php'); ?>