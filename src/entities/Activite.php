<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="activites")
 **/
class Activite
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id; 

    /** @Column(type="string", length=80, unique=true) **/
    private $nom;
 
    /** @column(type="text", nullable=true) **/
    private $description;

     /**
    * @OneToMany(targetEntity="Travailleur", mappedBy="activite")
    */
    private $travailleurs;
 
    /** 
    * @ManyToMany(targetEntity="User", inversedBy="activites")
    * @JoinTable(name="administrer")
    */
    private $users;

    /**
    * @ManyToMany(targetEntity="Produit", mappedBy="activites")
    */
    private $produits;

    /**
    * @ManyToMany(targetEntity="Gestionnaire", mappedBy="activites")
    */
    private $gestionnaires;

    // /**
    // * @OneToMany(targetEntity="HistoriqueTravailleur", mappedBy="activite")
    // */
    // private $HistoriqueTravailleur;
        
    public function __construct()
    {
        $this->travailleurs = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->gestionnaires = new ArrayCollection();
        $this->produits = new ArrayCollection();
        // $this->HistoriqueTravailleur = new ArrayCollection();
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
     * Get the value of travailleurs
     */ 
    public function getTravailleurs()
    {
        return $this->travailleurs;
    }

    /**
     * Set the value of travailleurs
     *
     * @return  self
     */ 
    public function setTravailleurs($travailleurs)
    {
        $this->travailleurs = $travailleurs;
        return $this;
    }

    /**
     * Get the value of users
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function setUsers($users)
    {
        $this->users = $users;
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
     * Get the value of HistoriqueTravailleur
     */ 
    public function getHistoriqueTravailleur()
    {
        return $this->HistoriqueTravailleur;
    }

    /**
     * Set the value of HistoriqueTravailleur
     *
     * @return  self
     */ 
    public function setHistoriqueTravailleur($HistoriqueTravailleur)
    {
        $this->HistoriqueTravailleur = $HistoriqueTravailleur;
        return $this;
    }

        // ====================================================================================================

    /**
     * Ajoute un travailleur dans le tableau des travailleurs.
     */
    public function addTravailleur(Travailleur $travailleur)
    {
        $this->travailleurs[] = $travailleur;
    }

    /**
    * Ajoute un user dans le tableau des users.
    */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
    * Ajoute un géstionnaire dans le tableau des géstionnaires.
    */
    public function addGestionnaire(Gestionnaire $gestionnaire)
    {
        $this->gestionnaires[] = $gestionnaire;
    }

    /**
    * Ajoute un produit dans le tableau des produits.
    */
    public function addProduit(Produit $produit)
    {
        $this->produits[] = $produit;
    }


    //  /**
    // * Ajoute un HistoriqueTravailleur dans le tableau des HistoriqueTravailleurs.
    // */
    // public function addHistoriqueTravailleur(HistoriqueTravailleur $historiqueTravailleur)
    // {
    //     $this->historiqueTravailleurs[] = $historiqueTravailleur;
    // }


   
}

?>
