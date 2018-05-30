<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta charset="utf-8"/>
	</head>
	<body>
		<!-- essai de mélange html/php -->
		<div>
		<?php echo '<p>Nom : Dupont ; Prénom : Laurent</p>';?>
		</div>
		<!-- essai de mélange html/php 2-->
		<div>
		<p><?php echo 'Nom : Dupont ; Prénom : Laurent';?></p>
		</div>
		<!-- essai de mélange html/php 3-->
		<p><?php echo 'Nom : ' . 'Dupont' . ' ; Prénom : ' . 'Laurent'?></p>
		<!-- Introduction de la notion de variable -->
		<div>
		<?php $Nom; $Prénom;
		$Nom='Dupont';
		$Prénom='Laurent';
		echo "$Nom; $Prénom";?>
		</div>
	</body>
</html>

