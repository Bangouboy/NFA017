<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta charset="utf-8"/>
	</head>
	<body>
		<!-- essai de m�lange html/php -->
		<div>
		<?php echo '<p>Nom : Dupont ; Pr�nom : Laurent</p>';?>
		</div>
		<!-- essai de m�lange html/php 2-->
		<div>
		<p><?php echo 'Nom : Dupont ; Pr�nom : Laurent';?></p>
		</div>
		<!-- essai de m�lange html/php 3-->
		<p><?php echo 'Nom : ' . 'Dupont' . ' ; Pr�nom : ' . 'Laurent'?></p>
		<!-- Introduction de la notion de variable -->
		<div>
		<?php $Nom; $Pr�nom;
		$Nom='Dupont';
		$Pr�nom='Laurent';
		echo "$Nom; $Pr�nom";?>
		</div>
	</body>
</html>

