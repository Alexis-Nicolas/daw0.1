<?php 
require 'classes/Logique/ConnexionBDD.php';
    // script d'une page de connexion
    // on vérifie que le formulaire a été envoyé
    if (isset($_POST['login']) && isset($_POST['password'])) {
        // on vérifie que les champs ne sont pas vides
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            // on vérifie que l'utilisateur existe
            $bdd = connexionBDD();
            $req = $bdd->prepare('SELECT * FROM utilisateur WHERE login = ? and mdp = ?');
            $req->execute(array($_POST['login'], $_POST['password']));
            $resultat = $req->fetch();
            if ($resultat) {
                // on vérifie que le mot de passe est correct
                if ($_POST['password'] == $resultat['mdp']) {
                    // on connecte l'utilisateur
                    session_start();
                    
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['id'] = $resultat['idUtilisateur'];
                    header('Location: ControleAccueil.php');
                } else {
                    echo 'Mot de passe incorrect';
                }
            } else {
                echo 'Utilisateur inexistant';
            }
        } else {
            echo 'Veuillez remplir tous les champs';
        }
    }

?>