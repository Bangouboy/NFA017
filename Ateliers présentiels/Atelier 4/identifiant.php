 <?php session_start();

 if (isset($_SESSION["username"])) {
     echo "Votre login est : ". $_SESSION["username"] ."<br></br>";
     echo "Votre mot de passe est : " .$_SESSION["password"]. "<br></br>";
     echo "Si vous souhaitez partir cliquez sur <a href='logout.php'>déconnexion</a> <br></br>";
 }else {
     header("location:login.php");
 }
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Identifiants</title>
</head>
<body>
</body>
</html>