<?php 
require_once 'classes/Logique/Utilisateur.php';
function utilisateur($id){
    $user  = new Utilisateur($id, 'nom', 'prenom', 'login', 'mdp');
    $user = $user->getUtilisateur($id);
    return $user;
}


?>