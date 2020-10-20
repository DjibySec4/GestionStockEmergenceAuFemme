<?php

namespace src\model;

use libs\system\Model;

class ComposantRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Retourne un composant spécifique.
    public function getComposant($id)
    {
        return $this->db->getRepository('Composant')->find(array('id' => $id));
    }

    // Ajoute un composant dans la BD    
    public function addComposant($composant)
    {
        $this->db->persist($composant);
        $this->db->flush();

        return $composant->getId();
    }

    // Modifie un composant dans la BD
    public function updateComposant($composant)
    {
        $a = $this->db->find('Composant', $composant->getId());
        if ($a != null) {
            $a->setNom($composant->getNom());
            $a->setDescription($composant->getDescription());
            $a->setPrix($composant->getPrix());
            $a->setQte($composant->getQte());
            $a->setPrix($composant->getPrix());
            $a->setDateAchat($composant->getDateAchat());
            
            $this->db->flush();
            return $composant->getId();
        } else {
            die("Objet " . $composant->getId() . " does not existe!!");
        }
    }

    // Supprime un composant de la BD
    public function deleteComposant($id)
    {
        $composant = $this->db->find('Composant', $id);
        if ($composant != null) {
            $this->db->remove($composant);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne toutes les Composants   
    public function listeComposants()
    {
        return $this->db->getRepository('Composant')->findAll();
    }

    public function getUnite($id)
    {
        return $this->db->getRepository('Unite')->find(array('id' => $id));
    }
}