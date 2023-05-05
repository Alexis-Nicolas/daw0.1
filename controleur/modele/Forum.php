<?php 

require_once 'classes/Logique/Discussion.php';
function afficherListeDiscussion() {
    $forum = new Discussion(0,0,0,0);
    $forum = $forum->listeDiscussion();
    return $forum;
}
?>