<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="produits")
 **/
class Produit
{
    /** @Id @Column(type="string", nullable=false, unique=true) **/ 
    private $reference;

    /** @Column(type="string", length=50, nullable=false) **/
    private $nom;
   
    /** @Column(type="string", nullable=true) **/
    private $photo;

    /** @column(type="string", length=20, nullable=true) */
     private $createdAt; 

    /** @column(type="string", length=20, nullable=true) */
     private $updatedAt;

     /**
     * @OneToOne(targetEntity="Activite", inversedBy="produit")
     * @JoinColumn(name="idActivite", referencedColumnName="id")
     */
    private $activite; 

     /**
     * @ManyToMany(targetEntity="Composant", inversedBy="produits",cascade={"persist"})
     * @JoinTable(name="fabriquer",
     *      joinColumns={@JoinColumn(name="idProduit", referencedColumnName="reference")},
     *      inverseJoinColumns={@JoinColumn(name="idComposant", referencedColumnName="id")}
     *      )
     */
    private $composants;

    /**
     * @ManyToOne(targetEntity="Unite", inversedBy="produits",cascade={"persist"})
     * @JoinColumn(name="idUnite", referencedColumnName="id")
     */
    private $unite;

     /**
     * @ManyToOne(targetEntity="StockProduit", inversedBy="produits",cascade={"persist"})
     * @JoinColumn(name="idStockProduit", referencedColumnName="id")
     */
    private $stock;

    /**
    * @OneToMany(targetEntity="HistoriqueStock", mappedBy="produit")
    */
    private $historiqueStocks;

    public function __construct()
    {
        $this->composants = new ArrayCollection();
        $this->historiqueStocks = new ArrayCollection();
    }

     /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

     /**
      * Get the value of createdAt
      */ 
     public function getCreatedAt()
     {
          return $this->createdAt;
     }

     /**
      * Set the value of createdAt
      *
      * @return  self
      */ 
     public function setCreatedAt($createdAt)
     {
          $this->createdAt = $createdAt;
          return $this;
     }

     /**
      * Get the value of updatedAt
      */ 
     public function getUpdatedAt()
     {
          return $this->updatedAt;
     }

     /**
      * Set the value of updatedAt
      *
      * @return  self
      */ 
     public function setUpdatedAt($updatedAt)
     {
          $this->updatedAt = $updatedAt;
          return $this;
     }

    /**
     * Get the value of activite
     */ 
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set the value of activite
     *
     * @return  self
     */ 
    public function setActivite($activite)
    {
        $this->activite = $activite;
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

    // ====================================================================================================

    /**
     * Ajoute un composant dans le tableau des composants.
     */
    public function addComposant(Composant $composant)
    {
        $this->composants[] = $composant;
    }

     /**
     * Ajoute un histo dans le tableau des historiques.
     */
    public function addHistorique(HistoriqueStock $historiqueStock)
    {
        $this->historiqueStocks[] = $historiqueStock;
    }
    
}
