<?php
 
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="gestionnaires")
 **/
class Gestionnaire
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

     /**
     * @ManyToMany(targetEntity="Activite", inversedBy="gestionnaires")
     * @JoinTable(name="activites_gestionnaires")
     */
    private $activites;

    /**
    * @OneToOne(targetEntity="Personne",cascade={"persist"})
    * @JoinColumn(name="idPersonne", referencedColumnName="id")
    */
    private $personne;

     /**
     * @ManyToMany(targetEntity="Fournisseur", inversedBy="gestionnaires")
     * @JoinTable(name="fournisseurs_gestionnaires")
     */ 
    private $fournisseurs;



    public function __construct()
    {
        $this->activites = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
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
     * Get the value of activites
     */ 
    public function getActivites()
    {
        return $this->activites;
    }

    /**
     * Set the value of activites
     *
     * @return  self
     */ 
    public function setActivites($activites)
    {
        $this->activites = $activites;
        return $this;
    }

     /**
     * Get the value of fournisseurs
     */ 
    public function getFournisseurs()
    {
        return $this->fournisseurs;
    }

    /**
     * Set the value of fournisseurs
     *
     * @return  self
     */ 
    public function setFournisseurs($fournisseurs)
    {
        $this->fournisseurs = $fournisseurs;
        return $this;
    }
    
    /**
     * Get the value of personne
     */ 
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * Set the value of personne
     *
     * @return  self
     */ 
    public function setPersonne($personne)
    {
        $this->personne = $personne;
        return $this;
    }

    // =========================================================================================

    /**
    * Ajoute une activité dans le tableau des activités.
    */
    public function addActivite(Activite $activite)
    {
        $this->activites[] = $activite;
    }

    /**
    * Ajoute une fournisseur dans le tableau des fournisseurs.
    */
    public function addFournisseur(Fournisseur $fournisseur)
    {
        $this->fournisseurs[] = $fournisseur;
    }

}


?>