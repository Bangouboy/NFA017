<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
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
					<td>Username :</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="text" name="password"/></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="commit" value="LOGIN" /></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>

<?php
 session_start();

 extract($_POST);
 
 if (isset($commit)){
 
 if ($username == 'admin' && $password == 'admin123') {
     $_SESSION['username'] = $username;
     $_SESSION['password'] = sha1($password);
     header('location:accueil.php');
 }
 else {
     echo "<br><span>login ou mot de passe invalide</span></br>";
 }
 }
?>