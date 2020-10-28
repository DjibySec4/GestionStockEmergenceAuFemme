<?php

namespace src\model;

use libs\system\Model;

class ComposantRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
     // Retourne tous les composants.
     public function listeComposants($page)
     {
         return $this->db->createQuery("SELECT c FROM Composant c ORDER BY c.id desc")
         ->setMaxResults(10)
         ->setFirstResult($page*10)
             ->getResult();
     }

       // Retourne tous les Unités   
       public function liste()
       {
           return $this->db->getRepository('Composant')->findAll();
       } 


    // Retourne un composant spécifique.
    public function getComposant($id)
    {
        return $this->db->getRepository('Composant')->find(array('id' => $id));
    }

    // Ajoute un composant dans la BD    
    public function addComposant($composant)
    {
        $this->db->persist($composant);
        $this->db->flush();

        return $composant->getId();
    }

    // Modifie un composant dans la BD
    public function updateComposant($composant)
    {
        $a = $this->db->find('Composant', $composant->getId());
        if ($a != null) {
            $a->setNom($composant->getNom());
            $a->setDescription($composant->getDescription());
            $a->setPrix($composant->getPrix());
            $a->setQte($composant->getQte());
            $a->setPrix($composant->getPrix());
            $a->setDateAchat($composant->getDateAchat());
            
            $this->db->flush();
            return $composant->getId();
        } else {
            die("Objet " . $composant->getId() . " does not existe!!");
        }
    }

    // Supprime un composant de la BD
    public function deleteComposant($id)
    {
        $composant = $this->db->find('Composant', $id);
        if ($composant != null) {
            $this->db->remove($composant);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    } 

    public function getUnite($id)
    {
        return $this->db->getRepository('Unite')->find(array('id' => $id));
    }

     // Retourne le nombre de composants.
     public function nbComposant(){
        return count($this->db->createQuery("SELECT c FROM Composant c")->getResult());
    }

     // Retourne tous les Unités   
     public function listeUnites()
     {
         return $this->db->getRepository('Unite')->findAll();
     } 

     public function getComposantByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT c FROM Composant c WHERE c.nom like '%$mc%' OR c.description like '%$mc%' OR c.prix like '%$mc%' OR c.qte like '%$mc%' ")->getResult();
    }
     

}