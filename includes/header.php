<div class="head family2">
	<div class="logo left">
		<a href="index.php">
			<img src="images/logo.gif" class="log_img left" alt="logo">
			<h3 class="log_text left">Объеда</h3>
		</a>
	</div>
	<div class="commandes right">
		<?php 
		include('pages/addpanier.php')
		?>
		<a href="index.php?page=karzina" class="boc">Kорзина</a>
		<h4 class="h_price">Ваш заказ : <?php
			foreach ($totals as $total):
				?>
				<span>
				<?php
					if($total['prix_t']){
						echo $total['prix_t'];
					}else{
				 
echo "0";
				} ?> p

				</span>
			<?php
				
			endforeach;
			?>
		</h4>
		
	</div>
</div>