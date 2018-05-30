<?php
if(isset($_POST['testEnvoi'])){
//     if ((isset($_POST['civilite']) && !empty($_POST['civilite']))
//       && (isset($_POST['nom'])) && !empty($_POST['nom'])
//         && (isset($_POST['prenom'])) && !empty($_POST['prenom'])
//         && (isset($_POST['adresse'])) && !empty($_POST['adresse'])
//         && (isset($_POST['ville'])) && !empty($_POST['ville'])
//         && (isset($_POST['cp'])) && !empty($_POST['cp'])
//         ){
            extract($_POST);
            
            try{
                
                $bdd=new PDO('mysql:host=localhost;dbname=ateliernfa017', 'root', '');
                echo "Connexion BDD OK";
                $reponse=$bdd->query("INSERT INTO utilisateur VALUES(default, '$civilite', '$nom','$prenom','$mail', '$adresse', '$ville', '$cp')")or exit(print_r($bdd->errorInfo()));
                echo "Inscription OK";
            }
            
            catch (PDOException $e){
                die('Erreur : ' .$e->getMessage());
            }       
            
//     }
}
?>