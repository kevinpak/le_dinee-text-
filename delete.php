<?php include('includes/panier.class.php'); ?>

<?php
if(!empty($_POST['id_prod'])){ 
	$id_prod = $_POST['id_prod'];

	if(empty($id_prod)){
		echo '<br/> Некорректные донны';
		exit();
	}else
	{
//echo $id_prod;
unset($_SESSION['panier'][$id_prod]);

	}
}
	?>