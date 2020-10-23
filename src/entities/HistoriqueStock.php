<?php

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
    private $nomOperation;

     /** @Column(type="integer", nullable=false) **/
     private $qte;

     /** @Column(type="integer", nullable=false) **/ 
     private $prix;
 
     /** @Column(type="boolean", nullable=false) **/
     private $enPromotion;
 
    /** @Column(type="integer", nullable=false) **/
    private $unite;

    /** @Column(type="string", nullable=false) **/
    private $produit;

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
     * Get the value of nomOperation
     */ 
    public function getNomOperation()
    {
        return $this->nomOperation;
    }

    /**
     * Set the value of nomOperation
     *
     * @return  self
     */ 
    public function setNomOperation($nomOperation)
    {
        $this->nomOperation = $nomOperation;
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
      * Get the value of unite
      */ 
     public function getUnite()
     {
         return $this->unite;
     }
 
     /**
      * Set the value of unite
      *
      * @return  self
      */ 
     public function setUnite($unite)
     {
         $this->unite = $unite;
 
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
} 
