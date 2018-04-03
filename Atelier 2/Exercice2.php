<?php
if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND
			!empty($_POST['adresse']) AND !empty($_POST['ville']) AND
			!empty($_POST['code']) AND is_numeric($_POST['code']) AND strlen($_POST['code'])==5)
{
	extract($_POST);

	echo "Bienvenue $prenom <b>$nom</b>.<br>";
	echo utf8_encode("Nous avons bien noté que vous habitez :$adresse $ville ($code)."); 
}

?>

