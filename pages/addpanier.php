<?php 
		global $db;
		$noms = array_keys($_SESSION['panier']);
		$produites = (implode("','", $noms));
		$id_s = $db->query("SELECT * FROM produits WHERE type IN ('$produites') ");
		$totals = $db->query("SELECT SUM(prix) AS prix_t FROM produits WHERE type IN ('$produites') ");
 ?>

 