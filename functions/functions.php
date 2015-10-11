<?php
//recuperer  les infos de la salade
function recuperer_salade()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT *  FROM produits WhERE id_cathegorie='1' AND aff='1' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}

?>


<?php
//recuperer  les infos de l'entree
function recuperer_entree()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT *  FROM produits WhERE id_cathegorie='2' AND aff='1' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}

?>

<?php
//recuperer  les infos de resi
function recuperer_resi()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT *  FROM produits WhERE id_cathegorie='3' AND aff='1' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}

?>

<?php
//recuperer  les infos de boison
function recuperer_boison()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT *  FROM produits WhERE id_cathegorie='4' AND aff='1' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}

?>

<?php
//recuperer  les infos de pain
function recuperer_pain()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT *  FROM produits WhERE id_cathegorie='5' AND aff='1' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}

?>

<?php
//recuperer  de toutes les cathegories

function recuperer_cathegories()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT * FROM cathegorie");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}
?>
<?php
//recuperer la colone type sans repetition d'element dans produits
function recuperer_type()
{
	$bdd = new PDO('mysql:host=localhost;dbname=diner;charset=utf8', 'root', '');
	$results = array();
	$query = $bdd->query("SELECT DISTINCT type FROM produits");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
		return $results;
}
?>
<?php
//recuperation des info du plat choisir 

/*function recuperation_info_plat_choisi(){
	
	$results = array();
	
	$query  = mysql_query("SELECT * FROM produits WHERE statut='1'  AND nom='$nom_recuperer'
	");
	while($row = mysql_fetch_assoc($query))
	{
		$results[] = $row;
	}
		return $results;
}*/
?>

