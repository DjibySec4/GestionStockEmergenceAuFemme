<?php

use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\UniteRepository;
use src\service\upload\SamaneUpload;

class UniteController extends Controller
{

    private $unite_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->unite_db = new UniteRepository;
        // if (isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }

    // Liste des unites
    public function liste($page = 1)
    {
        $nbEPage = 5;
        $this->data['nbUnites'] = $this->unite_db->nbUnite();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbUnites'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Unites';
        $this->data['unites'] = $this->unite_db->listeUnites($page - 1, $nbEPage);
        $this->view->load('pages/unite/liste', $this->data);
    }

    

    // Ajoute un unite    
    public function add()
    {
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['ajouter']))  
        {
            extract($_POST); 
            $unite = new Unite;

            $unite->setAbreviation($abreviation ?? '');
            $unite->setNomComplet($nomComplet ?? '');
           
            // Persistance
            $liste_unite = $this->unite_db->listeUnites();
            $tabUnite[] = array();
            foreach($liste_unite as $u)
            {
                $tabUnite[] = $u->getAbreviation();
            }
            if(in_array($abreviation, $tabUnite))
            {
                $this->data["unite_existe"] = "L'unité <b>" . $abreviation . "</b> a été déjà ajoutée ! ";
                $this->data['title'] = "Ajout d'une Unité";
                $this->view->load('pages/unite/add', $this->data);
            }
            else
            {
                $this->unite_db->addUnite($unite);
                $this->liste();
            } 
        } 
        else 
        {
            $this->data['title'] = "Ajout d'une Unite ";
            $this->view->load('pages/unite/add', $this->data);
        }
    }

    // Modifier un unite.
    public function edit($id)
    {
        $unite  = $this->unite_db->getUnite($id);
        if (isset($_POST['annuler'])) {
            $this->liste();
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            $unite->setAbreviation($abreviation);
            $unite->setNomComplet($nomComplet);
            $ok = $this->unite_db->updateUnite($unite);
            // var_dump($ok); die;
            $this->view->redirect('Unite/liste/1');
        }
        else
        {
            $this->data['title'] = "Modification d'une Unité ";
            $this->data['unite'] = $unite;
            $this->view->load('pages/unite/edit', $this->data);
        }
    }
    
    // Recherche un unite.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['unites'] = $this->unite_db->getUniteByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Unités';
        $this->view->load('pages/unite/liste', $this->data);
    }
}