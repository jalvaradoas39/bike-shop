<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- title -->
	<title>
		Chain Gang
		<?php 
			if (isset($page_title)) {
				echo ' - ' . h($page_title);
			} 
		?>
	</title>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo url_for('/css/stylesheets.css'); ?>" />
</head>
<body>
	
	<header>
		<h1>
			<a href="<?php echo url_for('/index.php'); ?>">
				<img class="bike-icon" src="<?php echo url_for('/images/USDOT_bicycle_symbol.svg'); ?>" />
				<br/>
				Chain Gang
			</a>
		</h1>
	</header>



