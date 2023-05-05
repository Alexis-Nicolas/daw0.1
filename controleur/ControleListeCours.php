<?php 

session_start();

require 'modele/ListeCours.php';
$cours = afficherGestionCours();
require 'templates/ListeCours.php';

?>