<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"> 
    <meta name="apple-mobile-web-app-capable" content="yes"></meta>
    <meta name="apple-mobile-web-app-status-bar-style" content="default"></meta>
    <meta name="author" content="Maciej Dudkowski">
	<meta name="description" content="Przystanek Geodezja - portal dla każdego technika geodety, ale nie tylko.">
    <title><?php echo title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
	<link rel="manifest" href="/icons/site.webmanifest">
	<link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#a05936">
	<meta name="msapplication-config" content="/icons/browserconfig.xml">
	<meta name="theme-color" content="#a05936">

	<script type="text/javascript" src="scripts/modernizr-custom.js"></script>
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/jquery-3.5.0.min.js"></script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FM1Y21SWBK"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-FM1Y21SWBK');
	</script>
</head>

<body class="bgimg">
	<div id="goUp">⬆️</div>

	<script>
		var goUpButton = document.getElementById('goUp');
		var rootElement = document.documentElement;

		function handleScroll(){
			var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;
			if(scrollTotal >= 200){
  				if ((rootElement.scrollTop / scrollTotal ) > 0.60 ){
					goUpButton.classList.add('goUpButtonShow');
  				} else{ goUpButton.classList.remove('goUpButtonShow'); }	
			}	
		}
		function scrollToTop(){
			rootElement.scrollTo({
    			top: 0,
    			behavior: "smooth"
  			})
		}
		document.addEventListener('scroll', handleScroll);
		goUpButton.addEventListener('click', scrollToTop);
	</script>

    <div id="app">

        <header>
            <div class="header-title">Przystanek Geodezja</div>
            <nav>
                <a href="strona-glowna.php">
                    <div class="header-nav-item">Strona Główna</div>
                </a>
                <a href="posty.php">
                    <div class="header-nav-item">Posty</div>
                </a>
                <a href="o-autorze.php">
                    <div class="header-nav-item">O autorze</div>
                </a>
                <a href="kontakt.php">
                    <div class="header-nav-item">Kontakt</div>
                </a>
				<div class="break"></div>
				<a class="post-a" href="https://instagram.com/przystanek.geodezja" target="_blank"><div class="main-elem separated-item instagram-elem">Instagram</div></a>
			</nav>

        </header>