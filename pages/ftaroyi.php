<?php include("includes/header.php"); ?>

<div class="main">
	<?php include('includes/menu.php'); ?>

	<div class="bloc_right left">
		<h2>Второе</h2>

		<hr/>
		<?php
		$recuperer_resis = recuperer_resi();
		foreach($recuperer_resis as $recuperer_resi){
			?>
			<div class="plat well">
				<div class="plat_img ">
					<img src="images/<?php echo $recuperer_resi['img'] ?>" alt="">	
				</div>
				<div class="plat_desc">	
					<a href="#" id="show" >
						<h2 id="<?php echo $recuperer_resi['nom'] ?>"  class="clickici"><?php echo $recuperer_resi['nom'] ?> </h2>
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
							<label for="nv_s">Выбор степени прожарки</label>
							<select name="nivo_select" id="nv_s">
								<option>Rare</option>
								<option>Medium</option>
								<option>well done</option>
							</select>
						</div>
						
						<div class="aff"></div>
						<div id="aff2"></div>


						
					</p>
					
				</form>
				
			</div>

		</div>
		<br/>
		
	</div>
	<div class="row direction">
		<a href="index.php?page=pervui"><i class="fa fa-long-arrow-left"></i> Первое</a>
		<a href="index.php?page=napitka">Напиток<i class="fa fa-long-arrow-right"></i> </a>
	</div>
</div>

