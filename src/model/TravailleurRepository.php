<?php

namespace src\model;

use libs\system\Model;

class TravailleurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Sélectionne un travailleur spécifique depuis la table Travailleurs.
    public function getTravailleur($id)
    {
        return $this->db->getRepository('Travailleur')->find(array('id' => $id));
    }


    // Sélectionne un travailleur spécifique depuis la table personnes.
    public function getTravailleurByIdPersonne($id)
    {
        return $this->db->createQuery("SELECT f FROM Travailleur f JOIN f.personne p WHERE p.id = '" . $id . "'")->getResult();
    }

    // Ajoute un travailleur dans la BD.
    public function addTravailleur($travailleur)
    {
        $this->db->persist($travailleur);
        $this->db->flush();

        return $travailleur->getId();
    }

   // Modifie un travailleur dans la BD.
    public function updateTravailleur($travailleur)
    {
        $f = $this->db->find('Travailleur', $travailleur->getId());
        if ($f != null) {
            $this->db->merge($travailleur);
            $this->db->flush();
            return $travailleur;
        } else {
            die("Objet " . $travailleur->getId() . " does not existe!!");
        }
    }

    // Supprime un travailleur de la BD.
    public function deleteActiviteTravailleur($id)
    {
        $travailleur = $this->db->find('Travailleur', $id);
        if ($travailleur != null) {
            $this->db->remove($travailleur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    
    public function getTravailleurByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT t FROM Travailleur t JOIN t.personne p WHERE p.nom like '%$mc%' OR p.prenom like '%$mc%' OR  p.telephone like '%$mc%' OR  p.adresse like '%$mc%' OR  p.sexe like '%$mc%' ")
            ->getResult();
    }


    // Retourne tous les Travailleurs.
    public function listeTravailleurs($page)
    {
        return $this->db->createQuery("SELECT t FROM Travailleur t ORDER BY t.id desc")
        ->setMaxResults(5)
        ->setFirstResult($page*5)
            ->getResult();
    }

    // Retourne le nombre de travailleur.
    public function nbTravailleur(){
        return count($this->db->createQuery("SELECT l FROM Travailleur l")->getResult());
    }

    // Selection d'une Personne par son Id
    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('id' => $id));
    }
    
    // Selection d'une Nationalite par son Id
    public function getNationalite($id)
    {
        return $this->db->getRepository('Nationalite')->find(array('id' => $id));
    }

    // Retourne la liste des Nationalites
    public function listeNationalites()
    {
        return $this->db->getRepository('Nationalite')->findAll();
    }

     // Retourne la liste des activités
     public function listeActivites()
     {
         return $this->db->getRepository('Activite')->findAll();
     }

     public function getTravailleurByPrenom(string $prenom)
     {
         return $this->db->createQuery("SELECT l FROM Travailleur l JOIN l.personne p WHERE p.prenom like '%" . $prenom . "%'")
             ->getResult();
     }

     
    public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

}