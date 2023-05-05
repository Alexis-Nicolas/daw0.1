<?php 


$isAdmin = true;
//deconnexion
function deconnexion(){
    session_destroy();
    header('Location: ControleConnexion.php');
}
?>