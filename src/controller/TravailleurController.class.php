<?php

use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\TravailleurRepository;
use src\service\upload\SamaneUpload;

class TravailleurController extends Controller
{

    private $travailleur_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->travailleur_db = new TravailleurRepository;
        $this->activite_db = new  ActiviteRepository;
        // if (isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }

    // Liste des travailleurs
    public function liste($page = 1)
    {
        $nbEPage = 5;
        $this->data['nbTravailleurs'] = $this->travailleur_db->nbTravailleur();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbTravailleurs'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Travailleurs';
        $this->data['travailleurs'] = $this->travailleur_db->listeTravailleurs($page - 1, $nbEPage);
        $this->view->load('pages/travailleur/liste', $this->data);
    }

    

    // Ajoute un travailleur    
    public function add()
    {

        $activite = [];
        $this->data['nationalites'] = $this->travailleur_db->listeNationalites();
        $this->data['activites'] = $this->travailleur_db->listeActivites();
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $travailleur = new Travailleur;
            $personne = new Personne();
            $newActivite = new Activite;

            /**
             * Ajout des infos de la Personne
             */
            // if (!$nomActivite)
            // {
                $personne->setNom($nom ?? '');
                $personne->setPrenom($prenom ?? '');
                $personne->setAdresse($adresse ?? '');
                $personne->setDateNaissance($dateNaissance ?? '');
                $personne->setTelephone($telephone ?? '');
                $upload = new SamaneUpload;
                $title = 'photo';
                $folder = 'public/images/personnes/travailleurs';
                if (isset($_FILES[$title]) && $_FILES[$title] != '') 
                {
                    $upload->load($title, $folder);
                    $personne->setPhoto($_FILES[$title]['name']);
                } else {
                    $personne->setPhoto('');
                }
                $personne->setSexe($sexe ?? '');
                $personne->setDescription($descriptionTravailleur ?? '');
                $personne->setNationalite($this->travailleur_db->getNationalite($nationalite));
            // }
            $travailleur->setPersonne($personne);
            
            // Ajout d'une new activité ou ajout des activité séléctionnées
            if (isset($nomActivite) && $nomActivite != "") {
              // Ajout d'une new activité
              $newActivite->setNom($nomActivite ?? '');
              $newActivite->setDescription($descriptionActivite ?? '');
              
              $this->activite_db->addActivite($newActivite);
              $this->data['vide'] = 0;
              $this->data['travailleur'] = $travailleur;
              $this->data['activite_ajouter'] = "L'activité " . $nomActivite . " a été ajoutée avec success. Veuillez maintenant ajouté le travailleur ! ";
              $this->data['title'] = "Ajout d'un Travailleur";
              $this->data['activites'] = $this->travailleur_db->listeActivites();
              return $this->view->load('pages/travailleur/add', $this->data);
            } else {
                $travailleur->setActivite($this->travailleur_db->getActivite($activite));
            }
            
            /**
             * Ajout Info Travailleur
             */  
            if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
            {
                $this->data['vide'] = 1;
                $this->data['travailleur'] = $travailleur;
                $this->data['title'] = "Ajout d'un Travailleur";
                $this->view->load('pages/travailleur/add', $this->data);
            } 
            
             /**
             * Persistance  du Travailleur
             */ 
            $this->travailleur_db->addTravailleur($travailleur);
            $this->liste();
        } 
        else 
        {
            
            $this->data['title'] = "Ajout d'un Travailleur ";
            $this->data['travailleur'] = $travailleur;
            $this->view->load('pages/travailleur/add', $this->data);
        }
    }

    // Modifier un travailleur.
    public function edit($id)
    {
        $travailleur  = $this->travailleur_db->getTravailleur($id);

        $this->data['nationalites'] = $this->travailleur_db->listeNationalites();
        $this->data['activites'] = $this->travailleur_db->listeActivites();

        $travailleur  = $this->travailleur_db->getTravailleur($id);
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $personne = $this->travailleur_db->getPersonne($idPersonne);
            if ($personne != null) {

                $personne->setNom($nom ?? '');
                $personne->setPrenom($prenom ?? '');
                $personne->setAdresse($adresse ?? '');
                $personne->setDateNaissance($dateNaissance ?? '');
                $personne->setTelephone($telephone ?? '');
                $personne->setSexe($sexe ?? '');
                $personne->setDescription($descriptionTravailleur ?? '');
                $title = 'photo';
                if ($_FILES[$title]['name'] != '') {
                    $upload = new SamaneUpload;
                    $folder = 'public/images/personnes/travailleurs';
                    $upload->load($title, $folder);
                    $personne->setPhoto($_FILES[$title]['name']);
                }
                $n = $this->travailleur_db->getNationalite($nationalite ?? '');
                if ($n != null)
                    $personne->setNationalite($n);

                $travailleur->setPersonne($personne ?? '');
                $travailleur->setActivite($this->travailleur_db->getActivite($activite));
                if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
                {
                    $this->data['vide'] = 1;
                    $this->data['title'] = "Modification d'un travailleur";
                    $this->data['travailleur'] = $travailleur;
                    $this->view->load('pages/travailleur/edit', $this->data);
                } 

                $this->travailleur_db->updateTravailleur($travailleur);
                $this->view->redirect('Travailleur/liste/1');
            } else {
                $this->data['vide'] = 1;
                $this->data['title'] = "Modification d'un travailleur";
                $this->data['travailleur'] = $travailleur;
                $this->view->load('pages/travailleur/edit', $this->data);
            }
        } else {
            $this->data['title'] = "Modification d'un travailleur";
            $this->data['travailleur'] = $travailleur;            
            $this->view->load('pages/travailleur/edit', $this->data);
        }
    }
    
    // Recherche un travailleur.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['travailleurs'] = $this->travailleur_db->getTravailleurByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Travailleurs';
        $this->view->load('pages/travailleur/liste', $this->data);
    }
}