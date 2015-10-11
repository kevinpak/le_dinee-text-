<?php include('includes/panier.class.php'); ?>

<?php
if(!empty($_POST['nom_recuperer'])){ 
	$nom_reecuperer = $_POST['nom_recuperer'];

	if(empty($nom_reecuperer)){
		echo '<br/> Некорректные донны';
		exit();
	}else{

		function recuperer_produit($nom_reecuperer)
		{
			
			$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
			$results = array();
			$query = $bdd->query("SELECT * FROM produits WHERE nom='$nom_reecuperer'  ");
			while($row = $query->fetch())
			{
				$results[] =$row;
			}
			return $results;
		}

		?>
		<form action="" id="form_produit">

			<div class="choix col-md-5 col-lg-5">
				<h4>Выбирйте :</h4>
				<select name="selection" id="select_produit">
					<?php 
					$recuperer_produits =  recuperer_produit($nom_reecuperer);

					foreach($recuperer_produits as $recuperer_produit)
					{
						?>
						<option value='<?php echo $recuperer_produit['type'] ?>' >

							<?php echo $recuperer_produit['type'] ?> 
						</option>
						<?php 
					}
					?>
				</select>

				<p>
					
				</p>
				
				<br/><br/>
				<form action="" method="POST" id="form_choisir" >
					<input type="text" name="pr_chois" id="pr_choisir" >
					<input type="submit" name="addpan" value="В карзину" id='adp' class="btn btn-primary" >
					<button class="btn btn-info"><a href="index.php?page=karzina">Перети к оплату</a></button>
				</form>



				<script>

					$('#select_produit').click(function(){
						var prdtui = $('[name="selection"]', '#form_produit').val();
						$('#pr_choisir').val(prdtui);

						$.ajax({
							type: "post",
							url:  "controle.php",
							data: {
								'$produit' : $('[name="selection"]', '#form_produit').val()
							},
							success: function(data){
								if(data == "success"){
									$(".aff3").css("color", "green").html(data);
									return true;
								} else {
									$(".det_choix").css("color", "red").html(data);
								}
							}
							
						});

					});


	//add prodoct in $_SESSION
						$('#adp').click(function(){
							var tgp = $('#pr_choisir').val();
										$.ajax({
							type: "post",
							url:  "addsession.php",
							data: {
								'$prdts' : tgp
							},
							success: function(data){
								if(data == "success"){
									$(".aff3").css("color", "green").html(data);
									return true;
								} else {
									$(".aff3").css("color", "red").html(data);


								}
							}
							
						});

						});


				</script>

			</div>
			<div class="aff3"></div>
			<div class="det_choix col-md-7 col-lg-7">
			</div>
		</form>
		<?php
		exit();
	}

}

?>
