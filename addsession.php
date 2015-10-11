<?php include('includes/panier.class.php'); ?>
<?php 
if(!empty($_POST['$prdts'])){ 
	$prdts= $_POST['$prdts'];
	
	$_SESSION['panier'][$prdts]=1;
}
?>