<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="produits") 
 **/
class Produit
{ 
    /** @Id @Column(type="string", nullable=false) **/ 
    private $reference;

    /** @Column(type="string", length=50, nullable=false) **/
    private $nom;
   
    /** @Column(type="string", nullable=true) **/
    private $photo;

    /** @column(type="string", length=20, nullable=true) */
     private $createdAt; 

    /** @column(type="string", length=20, nullable=true) */
     private $updatedAt;

    /** @Column(type="integer", nullable=false) **/
    private $qte;

    /** @Column(type="integer", nullable=false) **/ 
    private $prix;

    /** @Column(type="boolean", nullable=false) **/
    private $enPromotion;

    /** @Column(type="string", nullable=true, options={"default": "depot"}) **/
    private $nomOperation;

    /** @column(type="string", length=20, nullable=true) */
    private $dateFabtication;
    
    /** @column(type="string", length=20, nullable=true) */
    private $dateDePeremsion; 
 
     /**
     * @ManyToMany(targetEntity="Activite", inversedBy="produits",cascade={"persist"})
     * @JoinTable(name="produits_activites",
     *      joinColumns={@JoinColumn(name="ReferenceProduit", referencedColumnName="reference")},
     *      inverseJoinColumns={@JoinColumn(name="idActivite", referencedColumnName="id")}
     *      )
     */
    private $activites; 

     /**
     * @ManyToMany(targetEntity="Composant", inversedBy="produits",cascade={"persist"})
     * @JoinTable(name="produits_composants",
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


    public function __construct()
    {
        $this->composants = new ArrayCollection();
        // $this->historiqueStocks = new ArrayCollection();
        $this->activites = new ArrayCollection();
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
     * Get the value of dateFabtication
     */ 
    public function getDateFabtication()
    {
        return $this->dateFabtication;
    }

    /**
     * Set the value of dateFabtication
     *
     * @return  self
     */ 
    public function setDateFabtication($dateFabtication)
    {
        $this->dateFabtication = $dateFabtication;
        return $this;
    }

    /**
     * Get the value of dateDePeremsion
     */ 
    public function getDateDePeremsion()
    {
        return $this->dateDePeremsion;
    }

    /**
     * Set the value of dateDePeremsion
     *
     * @return  self
     */ 
    public function setDateDePeremsion($dateDePeremsion)
    {
        $this->dateDePeremsion = $dateDePeremsion;
        return $this;
    }

      /**
     * Get joinColumns={@JoinColumn(name="idProduit", referencedColumnName="reference")},
     */ 
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idProduit", referencedColumnName="reference")},
     *
     * @return  self
     */ 
    public function setActivites($activite)
    {
        $this->activites = $activite;
        return $this;
    }

     /**
     * Get joinColumns={@JoinColumn(name="idProduit", referencedColumnName="reference")},
     */ 
    public function getComposants()
    {
        return $this->composants;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idProduit", referencedColumnName="reference")},
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
     * Ajoute un composant dans le tableau des composants.
     */
    public function addComposant(Composant $composant)
    {
        $this->composants[] = $composant;
    }

    //  /**
    //  * Ajoute un histo dans le tableau des historiques.
    //  */
    // public function addHistorique(HistoriqueStock $historiqueStock)
    // {
    //     $this->historiqueStocks[] = $historiqueStock;
    // }
    
     /**
     * Ajoute un activite dans le tableau des activites.
     */
    public function addActivite(Activite $activite)
    {
        $this->activites[] = $activite;
    }

}
