<?php
include('includes/connect-bd.php');
include('includes/panier.class.php');
include('functions/functions.php'); 

$page = htmlentities($_GET['page']);   									

$pages = scandir('pages');												

if(!empty($page)&& in_array($_GET['page'].".php",$pages))				
{
	$content = 'pages/'.$_GET['page'].".php";
}else
{
	header("Location:index.php?page=acceuil");		
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="wigth=device=width, initial-scale=1.0" />
	<link rel="shortcut icon"  href="">

	<link href='http://fonts.googleapis.com/css?family=Philosopher:700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="libreries/font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" href="libreries/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="libreries/sweetalert/sweetalert.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/adaptation.css">
	<link rel="stylesheet" href="css/font.css">
</head>
<body>
	<script src="libreries/sweetalert/sweetalert.min.js"></script>
	<script src="libreries/jquery/jquery-1.3.2.min.js"></script>
	<script src="js/functions.js"></script>

		<div id="content">
			<?php
			
			include($content); 
			include('includes/footer.php');
			?>
		</div>
	

</body>
</html>