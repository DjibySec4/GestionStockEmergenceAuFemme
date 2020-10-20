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
     * @ManyToMany(targetEntity="Travailleur", mappedBy="activites")
     */
    private $travailleurs;

    /**
    * @ManyToMany(targetEntity="User", inversedBy="activites")
    * @JoinTable(name="administrer")
    */
    private $users;

    /**
    * @OneToOne(targetEntity="Produit", mappedBy="activite")
    */
    private $produit;

    /**
    * @ManyToMany(targetEntity="Gestionnaire", mappedBy="activites")
    */
    private $gestionnaires;
        
    public function __construct()
    {
        $this->travailleurs = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->gestionnaires = new ArrayCollection();
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
}

?>
