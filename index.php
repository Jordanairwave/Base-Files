<?php
	$pageTitle = 'Title Here';
	$pageDescription = 'Page description here';
	$socialImage = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $pageDescription; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta property="og:title" content="<?php echo $pageTitle; ?>">
	<meta property="og:description" content="<?php echo $pageDescription; ?>">
	<meta property=”og:image” content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . '/' . $socialImage; ?>"  /> <?php //1200x630 ?>
	<meta property="og:image:alt" content="Image description">
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:url" content=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>>
	<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

	<link href="css/style.css?v=<?php echo filemtime( 'css/style.css' ) ?>" rel="stylesheet" type="text/css" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	
</head>
<body>
	<div id="page-wrap">
		<header id="header">
			<nav id="main-nav">
			
			</nav>
		</header>
		<article id="main-content">
			<section>
			
			</section>
		</article>
		<aside id="sidebar">
			
			
		</aside>
		<footer id="footer">
			
		</footer>
	</div>
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	<script defer async type="text/javascript" src="js/scripts.js?v=<?php echo filemtime( 'js/scripts.js' ) ?>"></script>
</body>

</html>