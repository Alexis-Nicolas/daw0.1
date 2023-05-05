<?php
session_start();

require 'classes/Logique/Utilisateur.php';
//$_SESSION['login'] = $_POST['login'];
$user = new Utilisateur($_SESSION['id'],'','','','');
$isAdmin  = $user->isAdmin($_SESSION['id']);
$isProf = $user->isProf($_SESSION['id']);
//deconnexion
if(isset($_GET['action'])&& $_GET['action'] == 'deconnexion'){
            deconnexion();
}




require 'templates/accueil.php';
require 'modele/accueil.php';



?>