<div class="bloc_left left">
		<div class="cathegories ">
			<h2> Меню </h2>
			<div class="menu">
				<?php
				$infos_cathegories = recuperer_cathegories();
				foreach($infos_cathegories as $infos_cathegorie){
					?>
					<ul>
						<li><a href="#"> > <?php echo $infos_cathegorie['nom'] ?></a></li>
					</ul>
					<?php
				}
				?>
			</div>
		</div>	
	</div>