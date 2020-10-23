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
    public function getProduit($reference)
    {
        return $this->db->getRepository('Produit')->find(array('reference' => $reference));
    }

    // Ajoute un produit dans la BD    
    public function addProduit($produit)
    {
        $ok = $this->db->persist($produit);
        $this->db->flush();
        return $produit->getReference();
    }

    // Modifie un produit dans la BD
    public function updateProduit($produit)
    {
        $p = $this->db->find('Produit', $produit->getReference());
        if ($p != null) {
            $p->setReference($produit->getReference());
            $p->setNom($produit->getNom());
            $p->setPhoto($produit->getPhoto());
            $p->getUpdatedAt($produit->getUpdatedAt());
            
            $this->db->flush();
            return $produit->getReference();
        } else {
            die("Objet " . $produit->getReference() . " does not existe!!");
        }
    } 

    // Supprime un produit de la BD
    public function deleteProduit($reference)
    {
        $produit = $this->db->find('Produit', $reference);
        if ($produit != null) {
            $this->db->remove($produit);
            $this->db->flush();
        } else {
            die("Objet " . $reference . " does not existe!");
        }
    }

    // Retourne le nombre de produits.
    public function nbProduit(){
        return count($this->db->createQuery("SELECT p FROM Produit p")->getResult());
    }

    public function getProduitByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT p FROM Produit p WHERE p.reference like '%$mc%' OR p.nom like '%$mc%' ")->getResult();
    }


    // Retourne tous les Produits   
    public function liste()
    {
        return $this->db->getRepository('Produit')->findAll();
    }

    // Retourne tous les Travailleurs.
    public function listeProduits($page)
    {
        return $this->db->createQuery("SELECT p FROM Produit p ORDER BY p.reference desc")
        ->setMaxResults(5)
        ->setFirstResult($page*5)
            ->getResult();
    }


     // Retourne tous les Produits   
     public function listeUnites()
     {
         return $this->db->getRepository('Unite')->findAll();
     } 
     

    public function getActivite($id)
    {
        return $this->db->getRepository('Activite')->find(array('id' => $id));
    }

     // Retourne tous les Activités 
     public function listeActivites()
     {
         return $this->db->getRepository('Activite')->findAll();
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