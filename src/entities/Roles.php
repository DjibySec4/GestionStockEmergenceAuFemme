<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="roles")
 **/
class Roles
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=20, unique=true) **/
    private $nom;
    
    /**
     * Many Roles have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    
    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * Get many Roles have Many Users.
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set many Roles have Many Users.
     *
     * @return  self
     */ 
    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }

    public function chercherRole($roles, $nom)
    {
        $bol = false;
        foreach ($roles as $role)
        {
            if($role->getNom() == $nom)
            {
                $bol = true;
            }
        }
        if($bol == true)
        {
            echo " checked='checked'";
        }
    }

}

?>
