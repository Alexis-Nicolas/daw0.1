<?php 

require_once 'ConnexionBDD.php';
class Cours{
    private $idCours;
    private $titreCours;
    private $descriptionCours;
    private $fichierCours;
    private $dateCours;

    public function __construct($idCours, $titreCours, $descriptionCours, $fichierCours){
        $this->idCours = $idCours;
        $this->titreCours = $titreCours;
        $this->descriptionCours = $descriptionCours;
        $this->fichierCours = $fichierCours;
    }

    //getters

    public function getId(){
        return $this->idCours;
    }

    public function getTitre(){
        return $this->titreCours;
    }

    public function getDescription(){
        return $this->descriptionCours;
    }

    public function getFichier(){
        return $this->fichierCours;
    }

    //setters

    public function setTitre($titreCours){
        $this->titreCours = $titreCours;
    }

    public function setDescription($descriptionCours){
        $this->descriptionCours = $descriptionCours;
    }

    public function setFichier($fichierCours){
        $this->fichierCours = $fichierCours;
    }

    //fonctions


   //fonction qui permet de récupérer tous les cours
    public function listeCours(){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM cours');
        $req->execute();
        $resultat = $req->fetchAll();
        $cours = array();
        foreach($resultat as $donnees){
            $cours[] = new Cours($donnees['idCours'], $donnees['nomCours'], $donnees['matiere'], "");
        }
        return $cours;
    }

    public function getCours($idCours){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM cours WHERE idCours = ?');
        $req->execute(array($idCours));
        $resultat = $req->fetch();
        $cours = new Cours($resultat['idCours'], $resultat['nomCours'], $resultat['matiere'], "");
        return $cours;
    }

    public function ajouterCours($nomCours, $matiere){
        $bdd = connexionBDD();
        $req = $bdd->prepare('INSERT INTO cours(idCours, idResponsable,nomCours, matiere,dateCreation) VALUES("",?,?, ?,NOW())');
        $req->execute(array($_SESSION['id'],$nomCours, $matiere));
    }

    
}
?>