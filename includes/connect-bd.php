
<?php
//session_start();
	try{
		$db = new PDO("mysql:host=localhost;dbname=diner", "root", "");
		$db->exec("SET CHARACTER SET utf8");
	} catch(PDOException $e) {
		//die('Erreur: '.$e->getMessage());
		die("impossible de se connecter a la base de donnee");
	}
 ?>