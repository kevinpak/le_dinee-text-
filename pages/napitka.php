<?php include("includes/header.php"); ?>

<div class="main">
	<?php include('includes/menu.php'); ?>

	<div class="bloc_right left">
		<h2>Второе</h2>

		<hr/>
		<?php
	$recuperer_boisons = recuperer_boison();
		foreach($recuperer_boisons as $recuperer_boison){
			?>
			<div class="plat well">
				<div class="plat_img ">
					<img src="images/<?php echo $recuperer_boison['img'] ?>" alt="">	
				</div>
				<div class="plat_desc">	
					<a href="#" id="show" >
						<h2 id="<?php echo $recuperer_boison['nom'] ?>"  class="clickici"><?php echo $recuperer_boison['nom'] ?> </h2>
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
						
						<div class="nivo ">
							<label for="nv_s">Необязательный сахар к кофе или чаю (бесплатно)</label>
							<select name="nivo_select" id="nv_s">
								<option>Не надо</option>
								<option>Надо</option>
							</select>
						</div>
						
						<div class="aff"></div>
						<div id="aff2"></div>
						</div><?php ?>
					</p>
					
				</form>
				
			</div>

		</div>
		<br/>
		
	</div>
<div class="row direction">
			<a href="index.php?page=ftaroyi"><i class="fa fa-long-arrow-left"></i> Второе</a>
			<a href="index.php?page=hleb">Хлеб<i class="fa fa-long-arrow-right"></i> </a>
		</div>
</div>

