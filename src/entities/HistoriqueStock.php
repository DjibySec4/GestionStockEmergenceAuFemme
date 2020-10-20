<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="historiquestocks")
 **/
class HistoriqueStock
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
   
    /** @Column(type="string", nullable=false) **/
    private $dateOperation;

    /** @Column(type="string", nullable=true, options={"default": "depot"}) **/
    private $operation;

    /**
    * @ManyToOne(targetEntity="Produit", inversedBy="historiqueStock",cascade={"persist"})
    * @JoinColumn(name="idProduit", referencedColumnName="reference")
    */
    private $produit;

    /**
    * @ManyToOne(targetEntity="StockProduit", inversedBy="historiqueStock",cascade={"persist"})
    * @JoinColumn(name="idHistoriqueSrock", referencedColumnName="id")
    */
    private $stock;

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
     * Get the value of dateOperation
     */ 
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * Set the value of dateOperation
     *
     * @return  self
     */ 
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;
        return $this;
    }

    
    /**
     * Get the value of operation
     */ 
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set the value of operation
     *
     * @return  self
     */ 
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Get the value of produit
     */ 
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */ 
    public function setProduit($produit)
    {
        $this->produit = $produit;
        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }
} 
