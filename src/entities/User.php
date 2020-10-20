<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
 **/
class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $nom;

    /** @Column(type="string") **/
    private $prenom;

    /** @Column(type="string") **/
    private $email;

    /** @Column(type="string") **/
    private $password;

    /**
     * Many Users have Many Roles.
     * @ManyToMany(targetEntity="Roles", inversedBy="users")
     * @JoinTable(name="users_roles")
     */
    private $roles;

    /**
     * @ManyToMany(targetEntity="Activite", mappedBy="users")
     */
    private $activites;
    
    public function __construct()
    {
        $this->roles = new ArrayCollection();
        $this->activites = new ArrayCollection();
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

     /**
     * Get many Users have Many Roles.
     */ 
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set many Users have Many Roles.
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles = $roles;
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
    
    // ===================================================================================

    /**
    * Ajoute une unité dans le tableau des unités.
    */
    public function addUnite(Activite $activite)
    {
        $this->activites[] = $activite;
    }

    // Verifie si user a un role spécifique($nomRole).
    public function hasRole($nomRole)
    {
        $bol = 0;
        foreach ($this->roles as $role)
        {
            if($role->getNom() == $nomRole)
            {
                $bol = 1;
            }
        }
        return $bol;
    }
}

?>
