<?php 
if (!isset($_SESSION)) {
	session_start();
}

if (!isset($_SESSION['panier'])) {
	$_SESSION['panier']= array();
}
 ?>