<?php 
require_once 'classes/Logique/Utilisateur.php';
function afficherGestionUtilisateur() {
    $user = new Utilisateur($_SESSION['id'],"","","","");
    $users = $user->getAllUtilisateur();
    return $users;
}

?>