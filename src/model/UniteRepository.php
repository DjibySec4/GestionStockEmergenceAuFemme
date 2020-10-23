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
        $u = $this->db->find('Unite', $unite->getId());
        if ($u != null) {
            $u->setAbreviation($unite->getAbreviation());
            $u->setNomComplet($unite->getNomComplet());
            
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

     // Retourne le nombre de produits.
     public function nbUnite(){
        return count($this->db->createQuery("SELECT u FROM Unite u")->getResult());
    }

    public function getUniteByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT u FROM Unite u WHERE u.abreviation like '%$mc%' OR u.nomComplet like '%$mc%'")->getResult();
    }


    // Retourne toutes les unites   
    public function listeUnites()
    {
        return $this->db->getRepository('Unite')->findAll();
    }

}