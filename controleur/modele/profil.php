<?php

session_start();
require_once 'classes/Logique/Utilisateur.php';
$user= new Utilisateur($_SESSION['id'],"","","","");
$user = $user->getUtilisateur($_SESSION['id']);
$_SESSION['login']=$user->getLogin();
$_SESSION['nom']=$user->getNom();
$_SESSION['prenom']=$user->getPrenom();
?>