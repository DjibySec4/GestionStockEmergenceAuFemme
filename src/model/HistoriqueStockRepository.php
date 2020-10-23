<?php

namespace src\model;

use libs\system\Model;

class HistoriqueStockRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
   
    // Retourne une histo spécifique.
    public function getHistoriqueStock($id)
    {
        return $this->db->getRepository('HistoriqueStock')->find(array('id' => $id));
    }

    // Ajoute une histo dans la BD 
    public function addHistoriqueStock($historiqueStock)
    {
        $this->db->persist($historiqueStock);
        $this->db->flush();

        return $historiqueStock->getId();
    }

    // Modifie une histo dans la BD 
    public function updateHistoriqueStock($historiqueStock)
    {
        $h = $this->db->find('HistoriqueStock', $historiqueStock->getId());
        if ($h != null) {
            $h->setOperation($historiqueStock->getOperation());
            $h->setDateOperation($historiqueStock->getDateOperation());
            $h->setProduit($historiqueStock->getProduit());
            $h->setStock($historiqueStock->getStock());
          
            $this->db->flush();
            return $historiqueStock->getId();
        } else {
            die("Objet " . $historiqueStock->getId() . " does not existe!!");
        }
    }

    // Modifie une histo de la BD 
    public function deleteHistoriqueStock($id)
    {
        $historiqueStock = $this->db->find('HistoriqueStock', $id);
        if ($historiqueStock != null) {
            $this->db->remove($historiqueStock);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    // Retourne tous les histos
    public function listeHistoriqueStocks()
    {
        return $this->db->getRepository('HistoriqueStock')->findAll();
    }

    // Retourne un objet produit    
    public function getProduit($id)
    {
        return $this->db->getRepository('Produit')->find(array('id' => $id));
    }

    // Retourne un objet stock
    public function getStock($id)
    {
        return $this->db->getRepository('StockProduit')->find(array('id' => $id));
    }
    
   
}