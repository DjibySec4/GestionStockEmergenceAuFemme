<?php

namespace src\model;

use libs\system\Model;
use Personne;

class PersonneRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
   
    // Séléctionne une personne spécifique.
    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('id' => $id));
    }

    // Ajoute une personne dans la BD
    public function addPersonne($personne)
    {
        $this->db->persist($personne);
        $this->db->flush();

        return $personne->getId();
    }

    // Modifie une personne dans la BD
    public function updatePersonne($personne)
    {
        $p = $this->db->find('Personne', $personne->getId());
        if ($p != null) {
            $p->setNom($personne->getNom());
            $p->setPrenom($personne->getPrenom());
            $p->setAdresse($personne->getAdresse());
            $p->setDateNaissance($personne->getDateNaissance());
            $p->setPhoto($personne->getPhoto());
            $p->setTelephone($personne->getTelephone());
            $p->setSexe($personne->getSexe());
            $p->setPhoto($personne->getPhoto());
            $p->setPhoto($personne->getPhoto());
            $p->setDescription($personne->getDescription());
            $this->db->flush();
            return $personne->getId();
        } else {
            die("Objet " . $personne->getId() . " does not existe!!");
        }
    }

    // Supprime une personne de la BD.    
    public function deletePersonne($id)
    {
        $personne = $this->db->find('Personne', $id);
        if ($personne != null) {
            $this->db->remove($personne);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne toutes les personnes. 
    public function listePersonnes()
    {
        return $this->db->getRepository('Personne')->findAll();
    }

    // Permet de rechercher une personne par rapport a ces parametre
    public function getDuplication(string $nom,string $prenom, string $adresse){
        
        $query = $this->db->createQuery('SELECT p FROM Personne p WHERE p.adresse = :adresse AND p.nom = :nom AND p.prenom = :prenom');
        $query->setParameters(array(
            'adresse' => $adresse,
            'nom' => $nom,
            'prenom' => $prenom
        ));
        return $query->getResult();
    }

    public function getNationalite($id)
    {
        return $this->db->getRepository('Nationalite')->find(array('id' => $id));
    }
}
