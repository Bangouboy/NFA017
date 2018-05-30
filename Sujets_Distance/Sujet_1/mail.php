<?php
if(empty($_POST["nom"]) OR empty($_POST["mail"])) {
	echo "Vous devez remplir tous les champs !";
}
else {
	extract($_POST);
	echo "Merci pour votre message Mme/Mr $nom. Nous vous répondrons dès que possible !<br/>";
}
echo "Vous avez un nouveau message de $nom<br>";
echo "Voici son message :<br/>$message";
?>