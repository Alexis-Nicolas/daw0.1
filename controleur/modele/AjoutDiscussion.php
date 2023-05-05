<?php  

require_once 'modele/Discussion.php';
require_once 'modele/Cours.php';
function cours(){
    $cours = new Cours(0,0,0,0);
    $cours = $cours->listeCours();
    return $cours;
}
?>