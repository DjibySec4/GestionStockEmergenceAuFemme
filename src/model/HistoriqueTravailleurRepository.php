<?php

namespace src\model;

use libs\system\Model;

class HistoriqueTravailleurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
   
    // Retourne une histo spécifique.
    public function getHistoriqueTravailleur($id)
    {
        return $this->db->getRepository('HistoriqueTravailleur')->find(array('id' => $id));
    }

    // Ajoute une histo dans la BD 
    public function addHistoriqueTravailleur($historiqueTravailleur)
    {
        $this->db->persist($historiqueTravailleur);
        $this->db->flush();

        return $historiqueTravailleur->getId();
    }

    // Modifie une histo dans la BD 
    public function updateHistoriqueTravailleur($historiqueTravailleur)
    {
        $ht = $this->db->find('HistoriqueTravailleur', $historiqueTravailleur->getId());
        if ($ht != null) {
            $ht->setOperation($historiqueTravailleur->getOperation());
            $ht->setDateOperation($historiqueTravailleur->getDateOperation());
            $ht->setProduit($historiqueTravailleur->getProduit());
            $ht->setStock($historiqueTravailleur->getStock());
          
            $this->db->flush();
            return $historiqueTravailleur->getId();
        } else {
            die("Objet " . $historiqueTravailleur->getId() . " does not existe!!");
        }
    }

    // Modifie une histo de la BD 
    public function deleteHistoriqueTravailleur($id)
    {
        $historiqueTravailleur = $this->db->find('HistoriqueTravailleur', $id);
        if ($historiqueTravailleur != null) {
            $this->db->remove($historiqueTravailleur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    // Retourne tous les histos
    public function listeHistoriqueTravailleurs()
    {
        return $this->db->getRepository('HistoriqueTravailleur')->findAll();
    }

    // Retourne un objet activite    
    public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

    // Retourne un objet travailleur
    public function getTravailleur($id)
    {
        return $this->db->getRepository('Travailleur')->find(array('id' => $id));
    }
    
   
}