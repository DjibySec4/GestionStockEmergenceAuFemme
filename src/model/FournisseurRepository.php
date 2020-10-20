<?php

namespace src\model;

use libs\system\Model;

class FournisseurRepository extends Model 
{

    public function __construct()
    {
        parent::__construct();
    }

    // Sélectionne un fournisseur spécifique depuis la table fournisseurs.
    public function getFournisseur($id)
    {
        return $this->db->getRepository('Fournisseur')->find(array('id' => $id));
    }


    // Sélectionne un fournisseur spécifique depuis la table personnes.
    public function getFournisseurByIdPersonne($id)
    {
        return $this->db->createQuery("SELECT f FROM Fournisseur f JOIN f.personne p WHERE p.id = '" . $id . "'")->getResult();
    }

    // Ajoute un fournisseur dans la BD.
    public function addFournisseur($fournisseur)
    {
        $this->db->persist($fournisseur);
        $this->db->flush();

        return $fournisseur->getId();
    }

   // Modifie un fournisseur dans la BD.
    public function updateFournisseur($fournisseur)
    {
        $f = $this->db->find('Fournisseur', $fournisseur->getId());
        if ($f != null) {
            $this->db->merge($fournisseur);
            $this->db->flush();
            return $fournisseur;
        } else {
            die("Objet " . $fournisseur->getId() . " does not existe!!");
        }
    }

    // Supprime un fournisseur de la BD.
    public function deleteFournisseur($id)
    {
        $fournisseur = $this->db->find('Fournisseur', $id);
        if ($fournisseur != null) {
            $this->db->remove($fournisseur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    // Retourne tous les fournisseurs.
    public function listeFournisseurs($page)
    {
        return $this->db->createQuery("SELECT l FROM Fournisseur l ORDER BY l.id desc")
        ->setMaxResults(10)
        ->setFirstResult($page*10)
            ->getResult();
    }

    // Retourne le nombre de fournisseur.
    public function nbFournisseur(){
        return count($this->db->createQuery("SELECT l FROM Fournisseur l")->getResult());
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

    
    public function getFournisseuryPrenom(string $prenom)
    {
        return $this->db->createQuery("SELECT f FROM Fournisseur f JOIN l.personne p WHERE p.prenom like '%" . $prenom . "%'")
            ->getResult();
    }

    public function getFournisseurByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT f FROM Fournisseur f JOIN f.personne p WHERE p.nom like '%$mc%' OR p.prenom like '%$mc%' OR  p.telephone like '%$mc%' OR  p.adresse like '%$mc%' OR  p.sexe like '%$mc%' OR  f.nomActivite like '%$mc%' OR  f.potentiel like '%$mc%'")
            ->getResult();
    }

}