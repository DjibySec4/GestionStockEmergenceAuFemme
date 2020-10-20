<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="stockproduits")
 **/
class StockProduit
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
   
    /** @Column(type="integer", nullable=false) **/
    private $qte;

    /** @Column(type="string", nullable=false) **/
    private $prix;

    /** @Column(type="boolean", nullable=false) **/
    private $enPromotion;

     /**
     * @OneToMany(targetEntity="Produit", mappedBy="stock")
     **/
    private $produits;

    /**
    * @OneToMany(targetEntity="HistoriqueStock", mappedBy="stock")
    */
    private $historiqueStock;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of qte
     */ 
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * @return  self
     */ 
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get the value of enPromotion
     */ 
    public function getEnPromotion()
    {
        return $this->enPromotion;
    }

    /**
     * Set the value of enPromotion
     *
     * @return  self
     */ 
    public function setEnPromotion($enPromotion)
    {
        $this->enPromotion = $enPromotion;
        return $this;
    }

       /**
     * Get the value of produits
     */ 
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set the value of produits
     *
     * @return  self
     */ 
    public function setProduits($produits)
    {
        $this->produits = $produits;
        return $this;
    }

    /**
     * Get the value of historiqueStock
     */ 
    public function getHistoriqueStock()
    {
        return $this->historiqueStock;
    }

    /**
     * Set the value of historiqueStock
     *
     * @return  self
     */ 
    public function setHistoriqueStock($historiqueStock)
    {
        $this->historiqueStock = $historiqueStock;
        return $this;
    }


     // ====================================================================================================

    /**
     * Ajoute un produit dans le tableau des produits.
     */
    public function addProduit(Produit $produit)
    {
        $this->produits[] = $produit;
    }

} 
