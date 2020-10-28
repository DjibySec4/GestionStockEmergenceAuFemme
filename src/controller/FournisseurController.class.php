<?php

use libs\system\Controller;
use src\model\FournisseurRepository;
use src\service\upload\SamaneUpload;

class FournisseurController extends Controller
{

    private $fournisseur_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->fournisseur_db = new  FournisseurRepository;
        // if (isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }

    // Liste des fournisseurs
    public function liste($page = 1)
    {
        $nbEPage = 10;
        $this->data['nbFournisseurs'] = $this->fournisseur_db->nbFournisseur();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbFournisseurs'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Fournisseurs';
        $this->data['fournisseurs'] = $this->fournisseur_db->listeFournisseurs($page - 1, $nbEPage);
        $this->view->load('pages/fournisseur/liste', $this->data);
    }

    

    // Ajoute un fournisseur    
    public function add()
    {
        $activite = [];
        $this->data['nationalites'] = $this->fournisseur_db->listeNationalites();
        if (isset($_POST['annuler'])) {
            $this->view->redirect('Fournisseur/liste/1');
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $fournisseur = new Fournisseur;
            $personne = new Personne();

            /**
             * Ajout des infos de la Personne
             */
            $personne->setNom($nom ?? '');
            $personne->setPrenom($prenom ?? '');
            $personne->setAdresse($adresse ?? '');
            $personne->setDateNaissance($dateNaissance ?? '');
            $personne->setTelephone($telephone ?? '');
            $fournisseur->setNomActivite($activiteName ?? '');
            $fournisseur->setPotentiel($potentiel ?? '');
            $upload = new SamaneUpload;
            $title = 'photo';
            $folder = 'public/images/personnes/fournisseurs';
            if (isset($_FILES[$title]) && $_FILES[$title] != '') 
            {
                $upload->load($title, $folder);
                $personne->setPhoto($_FILES[$title]['name']);
            } else {
                $personne->setPhoto('');
            }
            $personne->setSexe($sexe ?? '');
            $personne->setDescription($descriptionFournisseur ?? '');
            $personne->setNationalite($this->fournisseur_db->getNationalite($nationalite));

            /**
             * Ajout Info Fournisseur
             */ 
            $fournisseur->setPersonne($personne);
           
            if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
            {
                $this->data['vide'] = 1;
                $this->data['fournisseur'] = $fournisseur;
                $this->data['title'] = "Ajout d'un Fournisseur";
                $this->view->load('pages/fournisseur/add', $this->data);
            } 

             /**
             * Persistance  du Fournisseur
             */ 
            $this->fournisseur_db->addFournisseur($fournisseur);
            $this->view->redirect('Fournisseur/liste/1');

        } 
        else 
        {
            $this->data['title'] = "Ajout d'un Fournisseur ";
            $this->view->load('pages/fournisseur/add', $this->data);
        }
    }

    // Modifier un fournisseur.
    public function edit($id)
    {
        $this->data['nationalites'] = $this->fournisseur_db->listeNationalites();

        $fournisseur  = $this->fournisseur_db->getFournisseur($id);
        if (isset($_POST['annuler'])) {
            $this->view->redirect('Fournisseur/liste/1');
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $personne = $this->fournisseur_db->getPersonne($idPersonne);
            if ($personne != null) {
 
                $personne->setNom($nom ?? '');
                $personne->setPrenom($prenom ?? '');
                $personne->setAdresse($adresse ?? '');
                $personne->setDateNaissance($dateNaissance ?? '');
                $personne->setTelephone($telephone ?? '');
                $fournisseur->setNomActivite($activiteName ?? '');
                $fournisseur->setPotentiel($potentiel ?? '');
                $personne->setSexe($sexe ?? '');
                $personne->setDescription($descriptionFournisseur ?? '');
                $title = 'photo';
                if ($_FILES[$title]['name'] != '') {
                    $upload = new SamaneUpload;
                    $folder = 'public/images/personnes/fournisseurs';
                    $upload->load($title, $folder);
                    $personne->setPhoto($_FILES[$title]['name']);
                }
                $n = $this->fournisseur_db->getNationalite($nationalite);
                if ($n != null)
                    $personne->setNationalite($n);

                $fournisseur->setPersonne($personne ?? '');
               
                if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
                {
                    $this->data['vide'] = 1;
                    $this->data['title'] = "Modification d'un fournisseur";
                    $this->data['fournisseur'] = $fournisseur;
                    $this->view->load('pages/fournisseur/edit', $this->data);
                } 

                // Persistance
                $this->fournisseur_db->updateFournisseur($fournisseur);
                $this->view->redirect('Fournisseur/liste/1');
            } else {
                $this->data['vide'] = 1;
                $this->data['title'] = "Modification d'un fournisseur";
                $this->data['fournisseur'] = $fournisseur;
                $this->view->load('pages/fournisseur/edit', $this->data);
            }
        } else {
            $this->data['title'] = "Modification d'un fournisseur";
            $this->data['fournisseur'] = $fournisseur;
            
            $this->view->load('pages/fournisseur/edit', $this->data);
        }
    } 

    // Recherche un fournisseur.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['fournisseurs'] = $this->fournisseur_db->getFournisseurByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Fournisseurs';
        $this->view->load('pages/fournisseur/liste', $this->data);
    }
}