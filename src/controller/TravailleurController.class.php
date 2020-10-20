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
                $resultat = $upload->load($title, $folder);
                $personne->setPhoto($_FILES[$title]['name']);
            } else {
                $personne->setPhoto('');
            }
            $personne->setSexe($sexe ?? '');
            $personne->setDescription($descriptionTravailleur ?? '');
            $personne->setNationalite($this->travailleur_db->getNationalite($nationalite));

            // Ajout d'une new activité ou ajout des activité séléctionnées
            if (isset($idActivite) && $idActivite != "") {
                 //Ajout des Activités sélectionnées
                foreach($activite as $a)
                {
                    $travailleur->addActivite($this->travailleur_db->getActivite($a));
                } 
            } else {
                // Ajout d'une new activité
                $newActivite->setNom($nomActivite ?? '');
                $newActivite->setDescription($descriptionActivite ?? '');

                $this->activite_db->addActivite($newActivite);
                return header("location:$url_base/Travailleur/add");
            }

            /**
             * Ajout Info Travailleur
             */ 
            $travailleur->setPersonne($personne);
           
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
            $this->view->load('pages/travailleur/add', $this->data);
        }
    }

    // Modifier un travailleur.
    public function edit($id)
    {
        $travailleur  = $this->travailleur_db->getTravailleur($id);
        foreach($travailleur->getActivites() as $a)
        {
            var_dump($a->getNom());
        } die;

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
                $n = $this->travailleur_db->getNationalite($nationalite);
                if ($n != null)
                    $personne->setNationalite($n);

                $travailleur->setPersonne($personne ?? '');
               
                if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
                {
                    $this->data['vide'] = 1;
                    $this->data['title'] = "Modification d'un travailleur";
                    $this->data['travailleur'] = $travailleur;
                    $this->view->load('pages/travailleur/edit', $this->data);
                } 

                // Modofie les infos de la table  travailleurs_activites
                if (isset($activite)) {
                    $tabActivites = [];
                    foreach ($activite as $a) {
                        $tabActivites[] =  $this->travailleur_db->getActivite($a);  
                        $travailleur->setActivites($tabActivites);
                    } 
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
            $this->data["listeActivites"] = $travailleur->getActivites();
            
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