<?php include('includes/panier.class.php'); ?>
<?php 
if(!empty($_POST['$produit'])){ 
	$produitt = $_POST['$produit'];
	
	if(empty($produitt)){
		echo '<br/> Некорректные донны';
		exit();
	}else{


	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');

	$pdt = $bdd->prepare("SELECT *  FROM produits WhERE type = ? ");

$pdt->execute([$produitt]);

foreach ($pdt as $prdt ):

	?>
					<div class="block_d">
						<h3><?= $prdt['type'] ?></h3>
						<img src="images/<?php echo $prdt['img'] ?>" alt="">
						<p><?= $prdt['prix'] ?>P</p>
					</div>


					<?php 
endforeach;

}


		exit();
	}

?>