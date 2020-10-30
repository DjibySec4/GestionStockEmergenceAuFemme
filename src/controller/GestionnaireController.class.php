<?php
session_start();
use libs\system\Controller;
use src\model\GestionnaireRepository;
use src\service\upload\SamaneUpload;

class GestionnaireController extends Controller
{

    private $gestionnaire_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->gestionnaire_db = new GestionnaireRepository;
        if (isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];
        } else {
            $this->view->redirect('Login');
        }
    }

    // Liste des gestionnaires
    public function liste($page = 1)
    {
        $nbEPage = 10;
        $this->data['nbGestionnaires'] = $this->gestionnaire_db->nbGestionnaire();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbGestionnaires'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Gestionnaires';
        $this->data['gestionnaires'] = $this->gestionnaire_db->listeGestionnaires($page - 1, $nbEPage);
        $this->view->load('pages/gestionnaire/liste', $this->data);
    }

    

    // Ajoute un gestionnaire    
    public function add()
    {
        $activite = [];
        $this->data['nationalites'] = $this->gestionnaire_db->listeNationalites();
        $this->data['activites'] = $this->gestionnaire_db->listeActivites();
        $this->data['fournisseurs'] = $this->gestionnaire_db->listeFournisseurs();

        if (isset($_POST['annulerGestionnaire'])) {
            $this->view->redirect('Gestionnaire/liste/1');

        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $gestionnaire = new Gestionnaire;
            $personne = new Personne();

            /**
             * Ajout des infos de la Personne
             */
            $personne->setNom($nom ?? '');
            $personne->setPrenom($prenom ?? '');
            $personne->setAdresse($adresse ?? '');
            $personne->setDateNaissance($descriptionGestionnaire ?? '');
            $personne->setTelephone($telephone ?? '');
            $upload = new SamaneUpload;
            $title = 'photo';
            $folder = 'public/images/personnes/gestionnaires';
            if (isset($_FILES[$title]) && $_FILES[$title] != '') 
            {
                $upload->load($title, $folder);
                $personne->setPhoto($_FILES[$title]['name']);
            } else {
                $personne->setPhoto('');
            }
            $personne->setSexe($sexe ?? '');
            $personne->setDescription($description ?? '');
            $personne->setNationalite($this->gestionnaire_db->getNationalite($nationalite));

            /**
             * Ajout Info Gestionnaire
             */ 
            $gestionnaire->setPersonne($personne);
            
            if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
            {
                $this->data['vide'] = 1;
                $this->data['gestionnaire'] = $gestionnaire;
                $this->data['title'] = "Ajout d'un Gestionnaire";
                $this->view->load('pages/gestionnaire/add', $this->data);
            }


            /**
            * Ajout des Activités dans la table activites_gestionnaires
            */ 
            foreach($activite as $a)
            {
                $gestionnaire->addActivite($this->gestionnaire_db->getActivite($a));
            } 

            /**
            * Ajout des Fournisseurs dans la table fournisseurs_gestionnaires
            */ 
            foreach($fournisseur as $f)
            {
                $gestionnaire->addFournisseur($this->gestionnaire_db->getFournisseur($f));
            } 

            // Persistance du gestionnaire. 
            $this->gestionnaire_db->addGestionnaire($gestionnaire);
            $this->view->redirect('Gestionnaire/liste/1');
        } 
        else 
        {
            $this->data['title'] = "Ajout d'un Gestionnaire ";
            $this->view->load('pages/gestionnaire/add', $this->data);
        }
    }

    // Modifier un gestionnaire.
    public function edit($id)
    {
        $this->data['nationalites'] = $this->gestionnaire_db->listeNationalites();
        $this->data['activites'] = $this->gestionnaire_db->listeActivites();
        $this->data['fournisseurs'] = $this->gestionnaire_db->listeFournisseurs();

        $gestionnaire  = $this->gestionnaire_db->getGestionnaire($id);
        if (isset($_POST['annulerGestionnaire'])) {
            $this->view->redirect('Gestionnaire/liste/1');
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $personne = $this->gestionnaire_db->getPersonne($idPersonne);
            if ($personne != null) {

                $personne->setNom($nom ?? '');
                $personne->setPrenom($prenom ?? '');
                $personne->setAdresse($adresse ?? '');
                $personne->setDateNaissance($descriptionGestionnaire ?? '');
                $personne->setTelephone($telephone ?? '');
                $personne->setSexe($sexe ?? '');
                $personne->setDescription($description ?? '');
                $title = 'photo';
                if ($_FILES[$title]['name'] != '') {
                    $upload = new SamaneUpload;
                    $folder = 'public/images/personnes/gestionnaires';
                    $upload->load($title, $folder);
                    $personne->setPhoto($_FILES[$title]['name']);
                }
                $n = $this->gestionnaire_db->getNationalite($nationalite);
                if ($n != null)
                    $personne->setNationalite($n);

                $gestionnaire->setPersonne($personne ?? '');
               
                if ($personne->getNom() == '' || $personne->getPrenom() == '' || $personne->getAdresse() == '' || $personne->getNationalite() == '' || $personne->getSexe() == '' || $personne->getTelephone() == '' )
                {
                    $this->data['vide'] = 1;
                    $this->data['title'] = "Modification d'un gestionnaire";
                    $this->data['gestionnaire'] = $gestionnaire;
                    $this->view->load('pages/gestionnaire/edit', $this->data);
                } 

                 // Modofie les infos de la table  activites_gestionnaires
                 if (isset($activite)) {
                    $tabActivites = [];
                    foreach ($activite as $a) {
                        $tabActivites[] =  $this->gestionnaire_db->getActivite($a);  
                        $gestionnaire->setActivites($tabActivites);
                    } 
                }

                 // Modofie les infos de la table  fournisseurs_gestionnaires
                 if (isset($fournisseur)) {
                     $tabFournisseurs = [];
                     foreach ($fournisseur as $f) {
                         $tabFournisseurs[] =  $this->gestionnaire_db->getFournisseur($f);  
                        $gestionnaire->setFournisseurs($tabFournisseurs);
                    } 
                }
                $this->gestionnaire_db->updateGestionnaire($gestionnaire);
                $this->view->redirect('Gestionnaire/liste/1');
            } else {
                $this->data['vide'] = 1;
                $this->data['title'] = "Modification d'un gestionnaire";
                $this->data['gestionnaire'] = $gestionnaire;
                $this->view->load('pages/gestionnaire/edit', $this->data);
            }
        } else {
            $this->data['title'] = "Modification d'un gestionnaire";
            $this->data['gestionnaire'] = $gestionnaire;
            $this->data["listeActivites"] = $gestionnaire->getActivites();
            $this->data["listeFournisseurs"] = $gestionnaire->getFournisseurs();
            $this->view->load('pages/gestionnaire/edit', $this->data);
        }
    }


    // Recherche un gestionnaire.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['gestionnaires'] = $this->gestionnaire_db->getGestionnaireByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Gestionnaires';
        $this->view->load('pages/gestionnaire/liste', $this->data);
    }

    public function Rechercher()
    {
        $mc = "";
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $mc = $_POST["search"];
        }
        $gestionnaire_db = new GestionnaireRepository;
        $data['gestionnaires'] = $gestionnaire_db->getGestionnaireByMotCle($mc);

        return $this->view->load("statistiques/lutteurs/recherche", $data);
    }
}