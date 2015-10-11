<?php include("includes/header.php"); ?>
<div class="main">
	<?php include('includes/menu.php'); ?>

	<div class="bloc_right left">
		<?php 
		include('pages/addpanier.php')
		?>

		<div class="paner">

			<table class="table table-striped">
				<tr class="n_title">
					<td></td>
					<td>Название</td>
					<td>Количество</td>
					<td>Ценна</td>
					<td>Удалить</td>
				</tr>
				<?php

				foreach ($id_s as $id):
					?>
				<tr>
					<td class='p_img'><img src="images/<?php echo $id['img']; ?>" alt="">	</td>
					<td class="prodoct_name"><?php echo $id['type'];?></td>
					<td >1</td>
					<td ><?php echo $id['prix'];?> p</td>
					<td ><a href="index.php?page=karzina"><i class="fa fa-trash" id="<?php echo $id['type'];?>"></i></a></td>

				</tr>

				<?php

				endforeach;
				foreach ($totals as $total):
					?>
				<tr>
					<td></td>
					<td></td>
					<td>Итого</td>
					<td class="price"> <?php echo $total['prix_t']; ?> p</td>
					<td></td>
				</tr>
			<?php endforeach; ?>
		</table>

	</div>
	<div class="enre">	
		<div class="del">	</div>
		<a href="#" id="show2"><button class="btn btn-info enre">ЗАКАЗАТЬ</button></a>
	</div>	

</div>

<div id="formulaire2">
	<a href="#" id="hide">×</a>
	<div class="commende_client col-md-12 row">
	<h2>Ваши данные</h2>
		<form  id="save_commade" >
			<div class="form-group">
				<label for="nom">Фамиля</label>
				<input type="text" class="form-control"  name="nom" id="nom">
			</div>
			<div class="form-group">
				<label for="prenoms">Имя</label>
				<input type="text" class="form-control" name="prenoms"  id="prenoms">
			</div>
			<div class="form-group">
				<label for="telephone">Телефон</label>
				<input type="text" class="form-control"  name="telephone" id="telephone" >
			</div>
			<div class="form-group">
			
				<input type="submit" name="save" class=" btn btn-info" value="Сохранить" >
			</div>


		</form>		
	</div>
</div>

<?php 
if (isset($_POST['save'])) 
	{
    $nom= htmlspecialchars (trim ($_POST['nom']));
		$prenoms= htmlspecialchars (trim ($_POST['prenoms']));
		$telephone = htmlspecialchars (trim ($_POST['telephone']));

		if($nom&&$prenoms&&$telephone)
		{
			// сохранить данные
			//header("Location:index.php?page=karzina")ж
		//сообщение о принито заказа
		}else{ echo "<div class=\"erreur_conecttt\">Некорректные данные !!!</div>";}
	}
?>
</div>