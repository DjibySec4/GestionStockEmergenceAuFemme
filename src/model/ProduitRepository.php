<?php

namespace src\model;

use libs\system\Model;

class ProduitRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Retourne un produit spécifique.
    public function getProduit($id)
    {
        return $this->db->getRepository('Produit')->find(array('id' => $id));
    }

    // Ajoute un produit dans la BD    
    public function addProduit($produit)
    {
        $this->db->persist($produit);
        $this->db->flush();

        return $produit->getId();
    }

    // Modifie un produit dans la BD
    public function updateProduit($produit)
    {
        $p = $this->db->find('Produit', $produit->getId());
        if ($p != null) {
            $p->setReference($produit->getReference());
            $p->setNom($produit->getNom());
            $p->setPhoto($produit->getPhoto());
            $p->setUpdateAt($produit->getUpdateAt());
            
            $this->db->flush();
            return $produit->getId();
        } else {
            die("Objet " . $produit->getId() . " does not existe!!");
        }
    }

    // Supprime un produit de la BD
    public function deleteProduit($id)
    {
        $produit = $this->db->find('Produit', $id);
        if ($produit != null) {
            $this->db->remove($produit);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    // Retourne tous les Produits   
    public function listeProduits()
    {
        return $this->db->getRepository('Produit')->findAll();
    }

    public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

    public function getUnite($id)
    {
        return $this->db->getRepository('Unite')->find(array('id' => $id));
    }

    public function getStock($id)
    {
        return $this->db->getRepository('StockProduit')->find(array('id' => $id));
    }
}