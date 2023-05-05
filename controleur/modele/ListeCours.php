<?php 
require_once 'classes/Logique/Cours.php';
function afficherGestionCours() {
    $cours = new Cours(0,"","","");
    $cours = $cours->listeCours();
    return $cours;
}