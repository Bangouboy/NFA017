<?php
session_start();
extract($_SESSION);
    
if(isset($username)){
    echo "Bienvenue ".$username. "<br></br>";
    echo "Pour accéder à vos identifiants cliquez <a href='identifiant.php>ici</a><br></br>";
    tracelog();
    nbreVisite();
    echo "Si vous souhaitez partir cliquez sur <a href='logout.php'> déconnexion</a>";
} else {
    header("location:login.php");
}

function tracelog(){
    $nom="log.txt";
    $maintenant=date('d-m-Y H:i:s');
    $fichier=fopen($nom, "a+");
    $l="connexion user : ".$_SESSION['username']." mot de passe : ".sha1($_SESSION['password'])." date de connexion : ".$maintenant." \n";
    echo "Nous sommes le : ".$maintenant." <br></br>";
    fputs($fichier, $l);
    fclose($fichier);
}

function nbreVisite(){
    if(isset($_COOKIE["nb_visites"])) {
        $nbVisites=$_COOKIE["nb_visites"]+1;
    }
    else $nbVisites=1;
    setCookie("nb_visites",$nbVisites);
    echo "C'est la ".$nbVisites."<sup>ème</sup> fois que vous nous rendez visite !<br></br>";
    }
?>