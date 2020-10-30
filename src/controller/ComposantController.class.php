<?php
session_start();
use libs\system\Controller;
use src\model\ActiviteRepository;
use src\model\ComposantRepository;
use src\model\HistoriqueStockRepository;
use src\model\ProduitRepository;
use src\model\UniteRepository;
use src\service\upload\SamaneUpload;

class ComposantController extends Controller
{

    private $composant_db;
    private $unite_db;
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->composant_db = new ComposantRepository;
        $this->unite_db = new  UniteRepository;
        if (isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];
        } else {
            $this->view->redirect('Login');
        }
    }

    // Liste des composants
    public function liste($page = 1) 
    {
        $nbEPage = 10; 
        $this->data['nbComposants'] = $this->composant_db->nbComposant();
        $this->data['depenseTotal'] = $this->composant_db->totalDepense();
        $this->data['nbPage'] = $nbPage = ceil($this->data['nbComposants'] / $nbEPage);
        $page = $page <= $nbPage ? $page : 1;
        $this->data['page'] = $page = (int) $page;
        $this->data['title'] = 'Liste des Composants';
        $this->data['composants'] = $this->composant_db->listeComposants($page - 1, $nbEPage);
        $this->view->load('pages/composant/liste', $this->data);
    }


    // Ajoute un composant    
    public function add()
    {
        $this->data['unites'] = $this->composant_db->listeUnites();
        if (isset($_POST['annuler'])) {
            $this->view->redirect('Composant/liste/1');
        }
        if (isset($_POST['ajouter'])) 
        {
            extract($_POST);
            $composant = new Composant;
            $newUnite = new Unite;

            /**
             * Ajout des infos du composant
             */
            $composant->setNom($nom ?? '');
            $composant->setDescription($description ?? '');
            $composant->setQte($qte ?? '');
            $composant->setPrix($prix ?? '');
            $composant->setDateAchat($dateAchat ?? '');
            // Ajout d'une new unite ou ajout des unités séléctionnées
            if (isset($abreviation) && $abreviation != "") {
                // Ajout d'une new unité   
                $liste_unite = $this->composant_db->listeUnites();
                $tabNomComplet[] = array();
                $tabAbreviation[] = array();
                foreach($liste_unite as $u)
                {
                    $tabNomComplet[] = $u->getNomComplet();
                    $tabAbreviation[] = $u->getAbreviation();
                }
                if(in_array($nomComplet, $tabNomComplet) ||  in_array($nomComplet, $tabAbreviation) )
                {
                    $this->data['vide'] = 0;
                    $this->data['composant'] = $composant;
                    $this->data['title'] = "Ajout d'un Composant";
                    $this->data['unite_existe'] = "L'unité " . $nomComplet . " existe déjà dans la base de donnée ! ";
                    $this->data['unites'] = $this->composant_db->listeUnites();
                    return $this->view->load('pages/composant/add', $this->data);
                }
                else
                {
                    $newUnite->setAbreviation($abreviation ?? '');
                    $newUnite->setNomComplet($nomComplet ?? '');
    
                    $this->unite_db->addUnite($newUnite);
                    $this->data['vide'] = 0;
                    $this->data['composant'] = $composant;
                    $this->data['title'] = "Ajout d'un Composant";
                    $this->data['unite_ajouter'] = "L'unité " . $unité . " a été ajoutée avec success. Veuillez maintenant ajouté le composant ! ";
                    $this->data['unites'] = $this->composant_db->listeUnites();
                    return $this->view->load('pages/composant/add', $this->data);
                }
            } else {
                $composant->setUnite($this->composant_db->getUnite(intval($unite)));
            }

            if ($composant->getNom() == '' || $composant->getPrix() == '' || $composant->getQte() == '')
            {
                $this->data['vide'] = 1;
                $this->data['composant'] = $composant;
                $this->data['title'] = "Ajout d'un Composant";
                $this->view->load('pages/composant/add', $this->data);
            }   
            
            /**
            * Persistance  du Composant
            */ 
            $this->composant_db->addComposant($composant);
            $this->view->redirect('Composant/liste/1');
        } 
        else 
        {
            $this->data['title'] = "Ajout d'un Composant ";
            $this->view->load('pages/composant/add', $this->data);
        }
    }

    // Modifier un composant.
    public function edit($id)
    {
        $composant  = $this->composant_db->getComposant($id);

        $this->data['unites'] = $this->composant_db->listeUnites();

        if (isset($_POST['annuler'])) {
            $this->view->redirect('Composant/liste/1');
        }
        if (isset($_POST['modifier'])) {
            extract($_POST);
            if ($composant != null) {
                $composant->setNom($nom ?? '');
                $composant->setDescription($description ?? '');
                $composant->setQte($qte ?? '');
                $composant->setPrix($prix ?? '');
                $composant->setDateAchat($dateAchat ?? '');
                $composant->setUnite($this->composant_db->getUnite(intval($unite)));

                if ($composant->getNom() == '' || $composant->getPrix() == '' || $composant->getQte() == '')
                {
                    $this->data['vide'] = 1;
                    $this->data['composant'] = $composant;
                    $this->data['title'] = "Ajout d'un Composant";
                    $this->view->load('pages/composant/add', $this->data);
                }   
                

                $this->composant_db->updateComposant($composant);
                $this->view->redirect('Composant/liste/1');
            } else {
                $this->data['vide'] = 1;
                $this->data['title'] = "Modification d'un composant";
                $this->data['composant'] = $composant;
                $this->view->load('pages/composant/edit', $this->data);
            }
        } else {
            $this->data['title'] = "Modification d'un composant";
            $this->data['composant'] = $composant;
            $this->view->load('pages/composant/edit', $this->data);
        }
    }
    
    
    // Recherche un composant.
    public function search()
    {
        if (isset($_POST['search']) && $_POST['search'] != "") {
            $this->data['composants'] = $this->composant_db->getComposantByMotCle(ucfirst($_POST['search']));
        }
        $this->data['title'] = 'Liste des Composants';
        $this->view->load('pages/composant/liste', $this->data);
    }
}