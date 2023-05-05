<?php 

require_once 'ConnexionBDD.php';

class Discussion {
private $idDiscussion;
private $titreDiscussion;
private  $contenue;
private $cours;

public function __construct($idDiscussion, $titreDiscussion, $contenue, $cours){
    $this->idDiscussion = $idDiscussion;
    $this->titreDiscussion = $titreDiscussion;
    $this->contenue = $contenue;
    $this->cours = $cours;
}
//getters

public function getId(){
    return $this->idDiscussion;
}
public function getTitre(){
    return $this->titreDiscussion;
}

public function getContenue(){
    return $this->contenue;    
}

public function getCours(){
    return $this->cours;
}

//setters

public function setTitre($titreDiscussion){
    $this->titreDiscussion = $titreDiscussion;
}

public function setContenue($contenue){
    $this->contenue = $contenue;
}

public function setCours($cours){
    $this->cours = $cours;
}

//fonctions

//fonction qui permet de récupérer toutes les discussions
public function listeDiscussion(){
    $bdd = connexionBDD();
    $req = $bdd->prepare('SELECT * FROM discussion');
    $req->execute();
    $resultat = $req->fetchAll();
    $discussion = array();
    foreach($resultat as $donnees){
        $discussion[] = new Discussion($donnees['idDiscussion'], $donnees['nom'], $donnees['sujet'], $donnees['idCours']);
    }
    return $discussion;
}

//fonction qui permet de récupérer une discussion
public function getDiscussion($idDiscussion){
    $bdd = connexionBDD();
    $req = $bdd->prepare('SELECT * FROM discussion WHERE idDiscussion = :idDiscussion');
    $req->execute(array('idDiscussion' => $idDiscussion));
    $resultat = $req->fetch();
    $discussion = new Discussion($resultat['idDiscussion'], $resultat['nom'], $resultat['sujet'], $resultat['idCours']);
    return $discussion;
}


//fonction qui permet d'ajouter une discussion
public function ajouterDiscussion($titreDiscussion, $contenue, $cours){
    $bdd = connexionBDD();
    $req = $bdd->prepare('INSERT INTO discussion(idDiscussion, idCours ,nom, sujet) VALUES("", :idCours,:nom, :sujet)');
    $req->execute(array(
        'nom' => $titreDiscussion,
        'sujet' => $contenue,
        'idCours' => $cours
    ));
}

}