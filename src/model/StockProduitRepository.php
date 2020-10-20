<?php

namespace src\model;

use libs\system\Model;

class StockProduitRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Retourne un stock spécifique.
    public function getStock($id)
    {
        return $this->db->getRepository('StockProduit')->find(array('id' => $id));
    }

    // Ajoute un stock dans la BD    
    public function addStock($stock)
    {
        $this->db->persist($stock);
        $this->db->flush();

        return $stock->getId();
    }

    // Modifie une stock dans la BD
    public function updateStock($stock)
    {
        $s = $this->db->find('StockProduit', $stock->getId());
        if ($s != null) {
            $s->setQte($stock->getQte());
            $s->setPrix($stock->getPrixx());
            $s->setEnPromotion($stock->getEnPromotion());
            $this->db->flush();
            return $stock->getId();
        } else {
            die("Objet " . $stock->getId() . " does not existe!!");
        }
    }

    // Supprime un stock de la BD
    public function deleteStock($id)
    {
        $stock = $this->db->find('StockProduit', $id);
        if ($stock != null) {
            $this->db->remove($stock);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne tous les Stocks   
    public function listeStocks()
    {
        return $this->db->getRepository('StockProduit')->findAll();
    }
}