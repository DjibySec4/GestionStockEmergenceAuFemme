<?php

namespace src\model;

use libs\system\Model;

class UniteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Retourne une unite spécifique.
    public function getUnite($id)
    {
        return $this->db->getRepository('Unite')->find(array('id' => $id));
    }

    // Ajoute une unite dans la BD    
    public function addUnite($unite)
    {
        $this->db->persist($unite);
        $this->db->flush();

        return $unite->getId();
    }

    // Modifie une unite dans la BD
    public function updateUnite($unite)
    {
        $a = $this->db->find('Unite', $unite->getId());
        if ($a != null) {
            $a->setAbreviation($unite->getAbreviation());
            $a->setNomComplet($unite->getNomComplet());
            
            $this->db->flush();
            return $unite->getId();
        } else {
            die("Objet " . $unite->getId() . " does not existe!!");
        }
    }

    // Supprime une unite de la BD
    public function deleteUnite($id)
    {
        $unite = $this->db->find('Unite', $id);
        if ($unite != null) {
            $this->db->remove($unite);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne toutes les unites   
    public function listeUnites()
    {
        return $this->db->getRepository('Unite')->findAll();
    }

}