<?php 

require_once 'classes/Logique/Discussion.php';
require_once 'classes/Logique/ConnexionBDD.php';
require_once 'classes/Logique/Utilisateur.php';

class Message{
    private $idMessage;
    private $idDiscussion;
    private $contenue;
    private $date;
    private $auteur;

    public function __construct($idMessage, $idDiscussion, $contenue, $date, $auteur){
        $this->idMessage = $idMessage;
        $this->idDiscussion = $idDiscussion;
        $this->contenue = $contenue;
        $this->date = $date;
        $this->auteur = $auteur;
    }

    //affiche les paramettre d'un message
    public function afficheMessage(){
        echo "idMessage : " . $this->idMessage . "<br>";
        echo "idDiscussion : " . $this->idDiscussion . "<br>";
        echo "contenue : " . $this->contenue . "<br>";
        echo "date : " . $this->date . "<br>";
        echo "auteur : " . $this->auteur . "<br>";
    }

    //getters

    public function getId(){
        return $this->idMessage;
    }

    public function getIdDiscussion(){
        return $this->idDiscussion;
    }

    public function getContenue(){
        return $this->contenue;
    }

    public function getDate(){
        return $this->date;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getNomAuteur($auteur){
        $user = new Utilisateur(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        $user = $user->getUtilisateur($auteur);
        return $user->getLogin();
        
    }

    //setters

    public function setIdDiscussion($idDiscussion){
        $this->idDiscussion = $idDiscussion;
    }

    public function setContenue($contenue){
        $this->contenue = $contenue;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }   

    //fonctions

    //fonction qui permet de récupérer tous les messages d'une discussion
    public function listeMessage($idDiscussion){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM message WHERE idDiscussion = :idDiscussion');
        $req->execute(array('idDiscussion' => $idDiscussion));
        $resultat = $req->fetchAll();
        $message = array();
        foreach($resultat as $donnees){
            $mess = new Message(0,0,0,0,0);
            $me = $mess->getNomAuteur($donnees['idAuteur']);
           
            $donnees['idAuteur'] = $me;
            
            $message[] = new Message($donnees['idMessage'], $donnees['idDiscussion'], $donnees['contenu'], $donnees['dateMessage'], $donnees['idAuteur']);
           
            
        }
        return $message;
    }

    //fonction qui permet d'ajouter un message
    public function newMessage($contenue, $idDiscussion){
        $bdd = connexionBDD();
        $req = $bdd->prepare('INSERT INTO message(idMessage, idAuteur,idDiscussion, contenu, dateMessage) VALUES("", :idAuteur,:idDiscussion, :contenu, NOW())');
        $req->execute(array(
            'idDiscussion' => $idDiscussion,
            'contenu' => $contenue,
            'idAuteur' => $_SESSION['id'],
        ));
    }






}
?>