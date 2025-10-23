<!DOCTYPE html >
<html>
<head>
	<?php
	if(isset($_REQUEST['pg'])){
	$page = $_REQUEST['pg'];	
	} else {
	$page = NULL;
	}

	if($page<>NULL) {
	$seo_titile = str_replace("-", " ", $page);
	?>
	<title><?php echo ucwords($seo_titile); ?></title>
	<meta name="description" content="<?php echo ucwords($seo_titile);?>, " />
	<?php }
	else{ ?>
	<title> Site Title </title>
	<meta name="description" content="" />

	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script> 
    
    <script src="https://www.google.com/recaptcha/api.js" asyc defer></script>
</head>
<body class="main">
