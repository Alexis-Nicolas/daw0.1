<?php 

session_start();
require_once 'modele/Discussion.php';
if (isset($_GET['action']) && $_GET['action'] == "ajouter") {
    require_once 'modele/AjoutDiscussion.php';
    $cours = cours();
    require_once 'templates/AjoutDiscussion.php';
if (isset($_GET['nom']) && isset($_GET['Sujet']) && isset($_GET['cours']) && $_GET['nom'] != "" && $_GET['Sujet'] != "" && $_GET['cours'] != "") {
    $disc = new Discussion(0,0,0,0);
    $disc->setTitre($_GET['nom']);
    $disc->setContenue($_GET['Sujet']);
    $disc->setCours($_GET['cours']);
    $disc->ajouterDiscussion($disc->getTitre(), $disc->getContenue(), $disc->getCours());
    header('Location: ControleForum.php');
}
}else{
$disc = new Discussion(0,0,0,0);
$disc = $disc->getDiscussion($_GET['id']);
$NomDiscution = $disc->getTitre();
$forum = afficherListeMessage($_GET['id']);
require_once 'templates/Discussion.php';
if (isset($_GET['contenue']) && isset($_GET['id']) && $_GET['contenue'] != "") {
    newMessage($_GET['contenue'], $_GET['id']);
    header('Location: ControleDiscussion.php?id='.$_GET['id']);
}
}

?>