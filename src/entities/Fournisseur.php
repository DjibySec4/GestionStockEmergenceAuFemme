<?php
 
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="fournisseurs")
 **/
class Fournisseur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @column(type="string", length=50, nullable=false) */
    private $nomActivite;

    /** @column(type="boolean", nullable=true) */
    private $potentiel;

    /**
    * @OneToOne(targetEntity="Personne",cascade={"persist"})
    * @JoinColumn(name="idPersonne", referencedColumnName="id")
    */
    private $personne;

    /**
     * @ManyToMany(targetEntity="Gestionnaire", mappedBy="fournisseurs")
     */
    private $gestionnaires;

    public function __construct()
    {
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
     * Get the value of nomActivite
     */ 
    public function getNomActivite()
    {
        return $this->nomActivite;
    }

    /**
     * Set the value of nomActivite
     *
     * @return  self
     */ 
    public function setNomActivite($nomActivite)
    {
        $this->nomActivite = $nomActivite;
        return $this;
    }

    /**
     * Get the value of potentiel
     */ 
    public function getPotentiel()
    {
        return $this->potentiel;
    }

    /**
     * Set the value of potentiel
     *
     * @return  self
     */ 
    public function setPotentiel($potentiel)
    {
        $this->potentiel = $potentiel;
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

     /**
     * Get the value of gestionnaires
     */ 
    public function getGestionnaires()
    {
        return $this->gestionnaires;
    }

    /**
     * Set the value of gestionnaires
     *
     * @return  self
     */ 
    public function setGestionnaires($gestionnaires)
    {
        $this->gestionnaires = $gestionnaires;
        return $this;
    }


    // =========================================================================================
   
    /**
    * Ajoute une activité dans le tableau des activités.
    */
    public function addGestionnaire(Gestionnaire $gestionnaire)
    {
        $this->gestionnaires[] = $gestionnaire;
    }

}


?>