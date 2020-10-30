<?php
session_start();
use libs\system\Controller;
use src\model\ActiviteRepository;

class ActiviteController extends Controller
{

    private $activite_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->activite_db = new  ActiviteRepository;
        if (isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];
        } else {
            $this->view->redirect('Login');
        }
    } 

    // Liste des activites
    public function liste($page = 1)
    {
        $nbEPage = 10;
        $this->data['nbActivites'] = $this->activite_db->nbActivite();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbActivites'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Activités';
        $this->data['activites'] = $this->activite_db->listeActivite($page - 1, $nbEPage);
        $this->view->load('pages/activite/liste', $this->data);
    }

    

    // Ajoute un activite    
    public function add()
    {
        if (isset($_POST['annuler'])) {
            $this->view->redirect('Activite/liste/1');
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $activite = new Activite;
 
           
            $activite->setNom($nom ?? '');
            $activite->setDescription($descriptionActivite ?? '');

            if ($activite->getNom() == '')
            {
                $this->data['vide'] = 1;
                $this->data['activite'] = $activite;
                $this->data['title'] = "Ajout d'une Activite";
                return $this->view->load('pages/activite/add', $this->data);
            } 

             /**
             * Persistance  du Activite
             */ 
            $listeActivites = $this->activite_db->liste();
            $tab = []; 
            foreach($listeActivites as $a)
            {
                $tab[] = $a->getNom();
            }
            if(in_array($nom, $tab))
            {
                $this->data['vide'] = 0;
                $this->data['activite'] = $activite;
                $this->data['title'] = "Ajout d'une Activite";
                $this->data['activiteExiste'] = "L'activite " . $nom . " existe déjà dans la base de données ! ";
                return $this->view->load('pages/activite/add', $this->data);
            }
            else
            {
                try {
                    $this->activite_db->addActivite($activite);
                } catch (PDOException $ex) {
                    // On affiche rien
                }
            }
            return $this->view->redirect('Activite/liste/1');
        } 
        else 
        {
            $this->data['title'] = "Ajout d'une Activite ";
            $this->view->load('pages/activite/add', $this->data);
        }
    }

    // Modifier un activite.
    public function edit($id)
    {
        $activite  = $this->activite_db->getActivite($id);
        if (isset($_POST['annuler'])) {
            $this->view->redirect('Activite/liste/1');
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $activite->setNom($nomActivite);
            $activite->setDescription($descriptionActivite);
            $this->activite_db->updateActivite($activite);
            $this->view->redirect('Activite/liste/1');
        }
        else 
        {
            $this->data['title'] = "Modification d'un activite";
            $this->data['activite'] = $activite;
            $this->view->load('pages/activite/edit', $this->data);
        }
    }

    // Recherche un activite.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['activites'] = $this->activite_db->getActiviteByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Activites';
        $this->view->load('pages/activite/liste', $this->data);
    }

}