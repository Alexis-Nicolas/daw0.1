<?php

require_once 'classes/Logique/Message.php';
function afficherListeMessage($idDiscussion) {
    $dis= new Message(0,0,0,0,0);
    $discussion = $dis->listeMessage($idDiscussion);
    return $discussion;
}


function newMessage($contenue, $idDiscussion){
    $dis= new Message(0,0,0,0,0);
    $dis->newMessage($contenue, $idDiscussion);
}


?>