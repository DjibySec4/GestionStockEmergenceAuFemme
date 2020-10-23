<?php

namespace src\model;

use libs\system\Model;

class NationaliteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
   
     // Retourne tous les fournisseurs.
     public function listeNationalites($page)
     {
         return $this->db->createQuery("SELECT n FROM Nationalite n ORDER BY n.id desc")
         ->setMaxResults(10)
         ->setFirstResult($page*10)
         ->getResult();
     }


    // Sélectionne une nationalite dans la BD;
    public function getNationalite($id)
    {
        return $this->db->getRepository('Nationalite')->find(array('id' => $id));
    }

    // aJOUTE une nationalite dans la BD;
    public function addNationalite($nationalite)
    {
        $this->db->persist($nationalite);
        $this->db->flush();

        return $nationalite->getId();
    }

    // Modifie une nationalite dans la BD;
    public function updateNationalite($nationalite)
    {
        $getNationalite = $this->db->find('Nationalite', $nationalite->getId());
        if ($getNationalite != null) {
            $this->db->merge($nationalite);
            $this->db->flush();
            return $nationalite;
        } else {
            die("Objet " . $nationalite->getId() . " does not existe!!");
        }
    }

   // Supprime une nationalite de la BD;
    public function deleteNationalite($id)
    {
        $nationalite = $this->db->find('Nationalite', $id);
        if ($nationalite != null) {
            $this->db->remove($nationalite);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    // Retourne le nombre de fournisseur.
    public function nbNationalite(){
        return count($this->db->createQuery("SELECT a FROM Nationalite a")->getResult());
    }
    

    public function getNationaliteByMotCle($mc) 
    {
        return $this->db->createQuery("SELECT n FROM Nationalite n  WHERE n.nom like '%$mc%'")->getResult();
    }

    
     // Retourne tous les Nationalité 
     public function liste()
     {
         return $this->db->getRepository('Nationalite')->findAll();
     }

    
}