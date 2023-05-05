<?php 
require_once 'ConnexionBDD.php';

//utilisateur
class Utilisateur{
    private $idUtilisateur;
    private $nomUtilisateur;
    private $prenomUtilisateur;
    private $loginUtilisateur;
    private $mdpUtilisateur;

    public function __construct($idUtilisateur, $nomUtilisateur, $prenomUtilisateur, $loginUtilisateur, $mdpUtilisateur ){
        $this->idUtilisateur = $idUtilisateur;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->mdpUtilisateur = $mdpUtilisateur;
    }

    public function __constructV($idUtilisateur){
        $this->idUtilisateur = $idUtilisateur;
        $this->nomUtilisateur = '';
        $this->prenomUtilisateur = '';
        $this->loginUtilisateur = '';
        $this->mdpUtilisateur = '';
    }
    
        
    

    public function isAdmin($idUtilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM admin WHERE idUtilisateur = ?');
        $req->execute(array($idUtilisateur));
        $resultat = $req->fetch();
        if ($resultat) {
            return true;
        } else {
            return false;
        } 
    }

    public function isProf($idUtilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM prof WHERE idUtilisateur = ?');
        $req->execute(array($idUtilisateur));
        $resultat = $req->fetch();
        if ($resultat) {
            return true;
        } else {
            return false;
        } 
    }

       
    

    //getters

    public function getId(){
        return $this->idUtilisateur;
    }
    public function getNom(){
        return $this->nomUtilisateur;
    }

    public function getPrenom(){
        return $this->prenomUtilisateur;
    }

    public function getLogin(){
        return $this->loginUtilisateur;
    }

    public function getMdp(){
        return $this->mdpUtilisateur;
    }

    //setters

    public function setNomUtilisateur($nomUtilisateur){
        $this->nomUtilisateur = $nomUtilisateur;
    }

    public function setPrenomUtilisateur($prenomUtilisateur){
        $this->prenomUtilisateur = $prenomUtilisateur;
    }

    public function setLoginUtilisateur($loginUtilisateur){
        $this->loginUtilisateur = $loginUtilisateur;
    }

    public function setMdpUtilisateur($mdpUtilisateur){
        $this->mdpUtilisateur = $mdpUtilisateur;
    }

    //fonctions

    //
    public function getUtilisateur($idUtilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM utilisateur WHERE idUtilisateur = ?');
        $req->execute(array($idUtilisateur));
        $donnees = $req->fetch();
        $utilisateur = new Utilisateur($donnees['idUtilisateur'], $donnees['nom'], $donnees['prenom'], $donnees['login'], $donnees['mdp']);
        return $utilisateur;
    }

    //fonction qui permet de récupérer tous les utilisateurs
    public function getAllUtilisateur(){
        $bdd = connexionBDD();
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();
        $donnees = $req->fetchAll();
        $utilisateurs = array();
        foreach($donnees as $donnee){
            $utilisateur = new Utilisateur($donnee['idUtilisateur'], $donnee['nom'], $donnee['prenom'], $donnee['login'], $donnee['mdp']);
            array_push($utilisateurs, $utilisateur);
        }
        return $utilisateurs;
    }

    //inserer un utilisateur
    public function insertUtilisateur($utilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, login, mdp) VALUES(?, ?, ?, ?)');
        $req->execute(array($utilisateur->getNom(), $utilisateur->getPrenom(), $utilisateur->getLogin(), $utilisateur->getMdp()));
    }

    //update 
    public function updateUtilisateur($idUtilisateur, $utilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('UPDATE utilisateur SET nom = ?, prenom = ?, login = ?, mdp = ? WHERE idUtilisateur = ?');
        $req->execute(array($utilisateur->getNom(), $utilisateur->getPrenom(), $utilisateur->getLogin(), $utilisateur->getMdp(), $idUtilisateur));
    }

    public function updateUtilisateur_sans_mdp($idUtilisateur, $utilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('UPDATE utilisateur SET  login = ?, prenom = ?,nom = ? WHERE idUtilisateur = ?');
        $req->execute(array($utilisateur->getNom(), $utilisateur->getPrenom(), $utilisateur->getLogin(), $idUtilisateur));
    }

    //delete
    public function deleteUtilisateur($idUtilisateur){
        $bdd = connexionBDD();
        $req = $bdd->prepare('DELETE FROM utilisateur WHERE idUtilisateur = ?');
        $req->execute(array($idUtilisateur));
    }

    
}
?>