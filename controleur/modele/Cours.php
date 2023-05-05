<?php 

require 'classes/Logique/Cours.php';
function infoCours($idCours){
    $cours = new Cours($idCours, '', '', '');
    $c = $cours->getCours($idCours);
    return $c;
}

?>