<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="nationalites")
 **/
class Nationalite
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=20, nullable=false) **/
    private $nom;

    /**
     * @OneToMany(targetEntity="Personne", mappedBy="nationalite")
     **/
    private $personnes;
   

    public function __construct()
    {
        $this->personnes = new ArrayCollection();
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
     * Get the value of personnes
     */ 
    public function getPersonnes()
    {
        return $this->personnes;
    }

    /**
     * Set the value of personnes
     *
     * @return  self
     */ 
    public function setPersonnes($personnes)
    {
        $this->personnes = $personnes;
        return $this;
    }

    //==========================================================================================
    
    /**
     * Ajoute une nationalite dans le tableau des nationalités.
     */
    public function addNationalite(Nationalite $nationalite)
    {
        $this->nationalites[] = $nationalite;
    }

}
