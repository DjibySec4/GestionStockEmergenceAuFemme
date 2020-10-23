<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="historiquetravailleurs")
 **/
class HistoriqueTravailleur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
   
    /** @Column(type="string", nullable=false) **/
    private $dateAdhesion;

    /**
    * @ManyToOne(targetEntity="Activite", inversedBy="historiqueTravailleurs",cascade={"persist"})
    * @JoinColumn(name="idActivite", referencedColumnName="id")
    */
    private $activite;

    /**
    * @ManyToOne(targetEntity="Travailleur", inversedBy="historiqueTravailleurs",cascade={"persist"})
    * @JoinColumn(name="idTravailleur", referencedColumnName="id")
    */
    private $travailleur;

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
     * Get the value of dateAdhesion
     */ 
    public function getDateAdhesion()
    {
        return $this->dateAdhesion;
    }

    /**
     * Set the value of dateAdhesion
     *
     * @return  self
     */ 
    public function setDateAdhesion($dateAdhesion)
    {
        $this->dateAdhesion = $dateAdhesion;
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
     * Get the value of travailleur
     */ 
    public function getTravailleur()
    {
        return $this->travailleur;
    }

    /**
     * Set the value of travailleur
     *
     * @return  self
     */ 
    public function setTravailleur($travailleur)
    {
        $this->travailleur = $travailleur;
        return $this;
    }
} 
