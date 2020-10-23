<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="composants")
 **/
class Composant
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id; 

    /** @Column(type="string", length=30, nullable=false) **/
    private $nom;

    /** @Column(type="string", length=100, nullable=true) **/
    private $description;

    /** @Column(type="string", length=15, nullable=false) **/
    private $prix;

    /** @Column(type="integer", length=15, nullable=false) **/
    private $qte;
  
    /** @Column(type="string", length=50, nullable=false) **/
    private $dateAchat;

    /**
    * @ManyToMany(targetEntity="Produit", mappedBy="composants")
    */
    private $produits;
 
    /**
     * @ManyToOne(targetEntity="Unite", inversedBy="composants",cascade={"persist"})
     * @JoinColumn(name="idUnite", referencedColumnName="id")
     */
    private $unite;

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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
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
       * Get the value of dateAchat
       */ 
      public function getDateAchat()
      {
            return $this->dateAchat;
      }

      /**
       * Set the value of dateAchat
       *
       * @return  self
       */ 
      public function setDateAchat($dateAchat)
      {
            $this->dateAchat = $dateAchat;

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

    // ====================================================================================================

    /**
     * Ajoute un produit dans le tableau des produits.
     */
    public function addProduit(Produit $produit)
    {
        $this->produits[] = $produit;
    }

} 
