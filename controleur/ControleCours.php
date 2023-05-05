<?php 
session_start();

if(isset($_GET['action'])&& $_GET['action'] == "ajouter"){
    
    require 'templates/AjoutCours.php';
    if(isset($_GET['nom']) && isset($_GET['matiere'])){
        require_once 'classes/Logique/Cours.php';
        require 'modele/AjoutCours.php';
        $nom = $_GET['nom'];
        $matiere = $_GET['matiere'];
        $id = $_SESSION['id'];
        $cours = new Cours(0,0,00,0);
        $cours->ajouterCours($nom, $matiere);
        header('Location: ControleListeCours.php');
    }
}else{
   

require 'modele/Cours.php';
$c = infoCours($_GET['id']);
require 'templates/Cours.php';

}
?>