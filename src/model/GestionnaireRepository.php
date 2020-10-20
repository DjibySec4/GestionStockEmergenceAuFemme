<?php

namespace src\model;

use libs\system\Model;

class GestionnaireRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Sélectionne un gestionnaire spécifique depuis la table Gestionnaires.
    public function getGestionnaire($id)
    {
        return $this->db->getRepository('Gestionnaire')->find(array('id' => $id));
    }


    // Sélectionne un gestionnaire spécifique depuis la table personnes.
    public function getGestionnaireByIdPersonne($id)
    {
        return $this->db->createQuery("SELECT f FROM Gestionnaire f JOIN f.personne p WHERE p.id = '" . $id . "'")->getResult();
    }

    // Ajoute un gestionnaire dans la BD.
    public function addGestionnaire($gestionnaire)
    {
        $this->db->persist($gestionnaire);
        $this->db->flush();

        return $gestionnaire->getId();
    }

   // Modifie un gestionnaire dans la BD.
    public function updateGestionnaire($gestionnaire)
    {
        $f = $this->db->find('Gestionnaire', $gestionnaire->getId());
        if ($f != null) {
            $this->db->merge($gestionnaire);
            $this->db->flush();
            return $gestionnaire;
        } else {
            die("Objet " . $gestionnaire->getId() . " does not existe!!");
        }
    }

    // Supprime un gestionnaire de la BD.
    public function deleteGestionnaire($id)
    {
        $gestionnaire = $this->db->find('Gestionnaire', $id);
        if ($gestionnaire != null) {
            $this->db->remove($gestionnaire);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    // Retourne tous les Gestionnaires.
    public function listeGestionnaires($page)
    {
        return $this->db->createQuery("SELECT l FROM Gestionnaire l ORDER BY l.id desc")
        ->setMaxResults(10)
        ->setFirstResult($page*10)
            ->getResult();
    }

    // Retourne le nombre de gestionnaire.
    public function nbGestionnaire(){
        return count($this->db->createQuery("SELECT l FROM Gestionnaire l")->getResult());
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

     // Retourne la liste des Nationalites
     public function listeActivites()
     {
         return $this->db->getRepository('Activite')->findAll();
     }

      // Retourne la liste des Nationalites
      public function listeFournisseurs()
      {
          return $this->db->getRepository('Fournisseur')->findAll();
      }

     public function getGestionnaireByPrenom(string $prenom)
     {
         return $this->db->createQuery("SELECT l FROM Travailleur l JOIN l.personne p WHERE p.prenom like '%" . $prenom . "%'")
             ->getResult();
     }

     public function getGestionnaireByMotCle($mc) 
     {
         return $this->db->createQuery("SELECT t FROM Travailleur t JOIN t.personne p WHERE p.nom like '%$mc%' OR p.prenom like '%$mc%' OR  p.telephone like '%$mc%' OR  p.adresse like '%$mc%' OR  p.sexe like '%$mc%' ")
             ->getResult();
     }
     

     public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

    public function getFournisseur($id)
    {
        return $this->db->getRepository('Fournisseur')->find(array('id' => $id));
    }
 

}