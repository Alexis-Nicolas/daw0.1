<?php 

session_start();

require_once 'modele/Forum.php';
 $forum = afficherListeDiscussion();
require_once 'templates/Forum.php';
?>