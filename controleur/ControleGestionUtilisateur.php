<?php 
session_start();
 require 'classes/Logique/Utilisateur.php';
    require 'modele/ModifierUtilisateur.php';
if(isset($_GET['action']) && $_GET['action'] == 'modifier') {
    $id = $_GET['id'];
  
    
    $user = Utilisateur($id);

    require 'templates/ModifierUtilisateur.php';
} else if(isset($_POST['action']) && $_POST['action']== 'modifierUtilisateur' ){

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login'])&& $_POST['nom'] != '' && $_POST['prenom'] != '' && $_POST['login'] != ''){
        $nom = $_POST['nom'];
        ECHO $nom;
        $prenom = $_POST['prenom'];
            ECHO $prenom;
        $login = $_POST['login'];
        echo $login;
        $id = $_POST['id'];
        echo $id;
        $user = new Utilisateur($id, $nom, $prenom, $login, 'mdp');
        $user->updateUtilisateur_sans_mdp( $id, $user);
        header('Location: ControleGestionUtilisateur.php');
    } else {
        
        echo 'Erreur';
    }
} else if (isset($_GET['action']) && $_GET['action'] == 'supprimer'&& isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
    $user = new Utilisateur($id, 'nom', 'prenom', 'login', 'mdp');
    $user->deleteUtilisateur($id);
    header('Location: ControleGestionUtilisateur.php');
}  else if (isset($_GET['action']) && $_GET['action'] == 'ajouter') {
    
    require 'templates/AjouterUtilisateur.php';
    } else if (isset($_POST['action']) && $_POST['action'] == 'ajouterUtilisateur') {
        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login'])&& $_POST['nom'] != '' && $_POST['prenom'] != '' && $_POST['login'] != ''){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $user = new Utilisateur(0, $nom, $prenom, $login, $mdp);
            $user->insertUtilisateur($user);
            header('Location: ControleGestionUtilisateur.php');
        } else {
            
            echo 'Erreur';
        }
    } else{
    require 'modele/GestionUtilisateur.php';
    $users = afficherGestionUtilisateur();
    require 'templates/GestionUtilisateur.php';
}
?>