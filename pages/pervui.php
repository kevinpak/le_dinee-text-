<?php include("includes/header.php"); ?>

<div class="main">
	<?php include('includes/menu.php'); ?>

	<div class="bloc_right left">
		<h2>Первое</h2>

		<hr/>
		<?php
	$recuperer_entrees = recuperer_entree();
		foreach($recuperer_entrees as $recuperer_entree){
			?>
			<div class="plat well">
				<div class="plat_img ">
					<img src="images/<?php echo $recuperer_entree['img'] ?>" alt="">	
				</div>
				<div class="plat_desc">	
					<a href="#" id="show" >
						<h2 id="<?php echo $recuperer_entree['nom'] ?>"  class="clickici"><?php echo $recuperer_entree['nom'] ?> </h2>
					</a>
				</div>		
			</div>
			<?php
		}
		?>

		
		<div id="formulaire" class="changer ">
			<a href="#" id="hide">×</a>
			<div class="commende_client col-md-12 row">
				<form  id="forme_plat" >
					<p class="f-p">
						<h2 class="id_recuperer" ></h2>
						<small id="output_checkuser"></small>
						<input type="text" name="plat" id="id_recuperer" class="id_recuperer" value=''>
						
						<div class="aff">

						</div>
						<div id="aff2">
		

						</div><?php ?>
					</p>
					
				</form>
				
			</div>

		</div>
		<br/>
		
	</div>
<div class="row direction">
			<a href="index.php?page=acceuil"><i class="fa fa-long-arrow-left"></i> Салат</a>
			<a href="index.php?page=ftaroyi">Второй<i class="fa fa-long-arrow-right"></i> </a>
		</div>
</div>

