<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Login</title>
</head>
<body>
	<form name="login" method="post">
		<fieldset>
			<legend>
				<b>LOGIN</b>
			</legend>
			<table>
				<tr>
					<td>
						<input type="text" name="username" placeholder="username" required />
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="password" placeholder="password" required />
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="LOGIN" />
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>

<?php
 session_start();

 extract($_POST);
 
 if (!empty ('username') && !empty ('password')){
     if ($username == admin && $password == admin123){
         header('Location:accueil.php'); 
     } else {
             echo "login ou mot de passe invalide";
     }
    echo "veuillez renseigner les champs";
 }
 
?>
    
    