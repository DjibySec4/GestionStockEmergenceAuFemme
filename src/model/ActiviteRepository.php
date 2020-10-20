<?php

namespace src\model;

use libs\system\Model;

class ActiviteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Retourne une activite spécifique.
    public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

    // Ajoute une activite dans la BD    
    public function addActivite($activite)
    {
        $this->db->persist($activite);
        $this->db->flush();

        return $activite->getId();
    }

    // Modifie une activite dans la BD
    public function updateActivite($activite)
    {
        $f = $this->db->find('Activite', $activite->getId());
        if ($f != null) {
            $this->db->merge($activite);
            $this->db->flush();
            return $activite;
        } else {
            die("Objet " . $activite->getId() . " does not existe!!");
        }
    }


    // Supprime un activite de la BD
    public function deleteActivite($id)
    {
        $activite = $this->db->find('Activite', $id);
        if ($activite != null) {
            $this->db->remove($activite);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne toutes les activites   
    public function listeActivites()
    {
        return $this->db->getRepository('Activite')->findAll();
    }

    public function getProduit($id)
    {
        return $this->db->getRepository('Produit')->find(array('id' => $id));
    }

      // Retourne le nombre de fournisseur.
      public function nbActivite(){
        return count($this->db->createQuery("SELECT a FROM Activite a")->getResult());
    }

    public function getActiviteByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT a FROM Activite a  WHERE a.nom like '%$mc%' OR a.description like '%$mc%'")->getResult();
    }

}