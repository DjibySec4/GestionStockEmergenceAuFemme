<?php

/**
 * @Entity @Table(name="personnes")
 **/

class Personne
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @column(type="string", length=20, nullable=false) */
    private $nom;

    /** @column(type="string", length=50, nullable=false) */
    private $prenom;
    
    /** @column(type="string", length=50, nullable=false) */
    private $adresse;

    /** @column(type="string", length=10, nullable=false) */
    private $dateNaissance;
 
    /** @column(type="string", nullable=true) */
    private $telephone;
 
    /** @column(type="string", nullable=true) */
    private $photo;

     /** @column(type="string", length=8, nullable=false) */
     private $sexe;
        
    /** @column(type="text", nullable=true)  */
    private $description;   

    /**
     * @ManyToOne(targetEntity="Nationalite", inversedBy="personnes", cascade={"persist"})
     * @JoinColumn(name="idNationalite", referencedColumnName="id")
     */
    private $nationalite;

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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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
      * Get the value of sexe
      */ 
     public function getSexe()
     {
          return $this->sexe;
     }

     /**
      * Set the value of sexe
      *
      * @return  self
      */ 
     public function setSexe($sexe)
     {
          $this->sexe = $sexe;
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
     * Get the value of nationalite
     */ 
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @return  self
     */ 
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
        return $this;
    }
}


?>