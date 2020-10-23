<?php

use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\NationaliteRepository;
use src\service\upload\SamaneUpload;

class NationaliteController extends Controller
{

    private $nationalite_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->nationalite_db = new  NationaliteRepository;
        // if (isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }

    // Liste des activites
    public function liste($page = 1)
    {
        $nbEPage = 3;
        $this->data['nbNationalites'] = $this->nationalite_db->nbNationalite();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbNationalites'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Nationalités';
        $this->data['nationalites'] = $this->nationalite_db->listeNationalites($page - 1, $nbEPage);
        $this->view->load('pages/nationalite/liste', $this->data);
    }

    

    // Ajoute un nationalite    
    public function add()
    {
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $nationalite = new Nationalite;

           
            $nationalite->setNom($nom ?? '');
           
            if ($nationalite->getNom() == '')
            {
                $this->data['vide'] = 1;
                $this->data['nationalite'] = $nationalite;
                $this->data['title'] = "Ajout d'une Nationalité";
                $this->view->load('pages/nationalite/add', $this->data);
            } 

             /**
             * Persistance  du Activite
             */ 
            $liste_nationalite = $this->nationalite_db->liste();
            $tabNationalite[] = array();
            foreach($liste_nationalite as $n)
            {
                $tabNationalite[] = $n->getNom();
            }
            if(in_array($nom, $tabNationalite))
            {
                $this->data["nationalite_existe"] = "La nationalité " . $nom . " a été déjà ajoutée! ";
                $this->data['title'] = "Ajout d'une Nationalité";
                $this->view->load('pages/nationalite/add', $this->data);
            }
            else
            {
                $this->nationalite_db->addNationalite($nationalite);
                $this->liste();
            }
        } 
        else 
        {
            $this->data['title'] = "Ajout d'une Nationalité ";
            $this->view->load('pages/nationalite/add', $this->data);
        }
    }

    // Modifier un nationalite.
    public function edit($id)
    {
        $nationalite  = $this->nationalite_db->getNationalite($id);
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $nationalite->setNom($nom ?? '');
            $this->nationalite_db->updateNationalite($nationalite);
            $this->view->redirect('Nationalite/liste/1');
        }
        else
        {
            $this->data['title'] = "Modification d'un nationalite";
            $this->data['nationalite'] = $nationalite;
            $this->view->load('pages/nationalite/edit', $this->data);
        }
    }

    // Recherche un nationalite.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['activites'] = $this->nationalite_db->getNationaliteByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Nationalités';
        $this->view->load('pages/nationalite/liste', $this->data);
    }
}