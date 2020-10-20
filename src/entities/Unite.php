<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="unites")
 **/
class Unite
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=5, nullable=false) **/
    private $abreviation;

    /** @Column(type="string", length=15, nullable=true) **/
    private $nomComplet;

    /**
    * @OneToMany(targetEntity="Produit", mappedBy="unite")
    **/
    private $produits;

    /**
     * @OneToMany(targetEntity="Composant", mappedBy="unite")
     **/
    private $composants;


    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->composants = new ArrayCollection();
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
     * Get the value of abreviation
     */ 
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set the value of abreviation
     *
     * @return  self
     */ 
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;
        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
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
     * Get the value of composants
     */ 
    public function getComposants()
    {
        return $this->composants;
    }

    /**
     * Set the value of composants
     *
     * @return  self
     */ 
    public function setComposants($composants)
    {
        $this->composants = $composants;
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

    /**
     * Ajoute un composant dans le tableau des composants.
     */
    public function addComposant(Composant $composant)
    {
        $this->composants[] = $composant;
    }
    
}
