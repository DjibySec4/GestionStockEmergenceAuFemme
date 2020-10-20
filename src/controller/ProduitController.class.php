<?php

use libs\system\Controller;
use src\model\ProduitRepository;
use src\model\TestRepository;

class ProduitController extends Controller{

    private $produit_db;

    public function __construct(){
        parent::__construct();

        $this->produit_db = new ProduitRepository;
    }

    //  public function index(){
    //     // extract($_POST);
    //     var_dump($_POST["email"]);die;
        
    //     return $this->view->load("test/get", $data);
    // }
   
    
    // public function getProduit($id){
        
    //     $data['produit'] = $this->produit_db->getProduit($id);
        
    //     return $this->view->load("test/get", $data);
    // }
   
    // public function liste(){
    //     $tdb = new TestRepository();
    //     $data['tests'] = $tdb->listeTest();
    //     return $this->view->load("test/liste", $data);
    // }
   

    // public function add(){
    //     $tdb = new TestRepository();
    //     if(isset($_POST['valider']))
    //     {
    //         extract($_POST);
    //         $data['ok'] = 0;
    //         if(!empty($valeur1) && !empty($valeur2)) {
                
    //             $testObject = new Test();
                
    //             $testObject->setValeur1(addslashes($valeur1));
    //             $testObject->setValeur2(addslashes($valeur2));

    //             $ok = $tdb->addTest($testObject);
    //             $data['ok'] = $ok;
    //         }
    //         return $this->view->load("test/add", $data);
    //     }else{
    //         return $this->view->load("test/add");
    //     }
    // }
     

    // public function update(){
    //     $tdb = new TestRepository();
    //     if(isset($_POST['modifier'])){
    //         extract($_POST);
    //         if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
    //             $testObject = new Test();
    //             $testObject->setId($id);
    //             $testObject->setValeur1($valeur1);
    //             $testObject->setValeur2($valeur2);
    //             $ok = $tdb->updateTest($testObject);
    //         }
    //     }      
    //     return $this->liste();
    // }
   

    // public function delete($id){
        
    //     $tdb = new TestRepository();
    //     $tdb->deleteTest($id);
    //     return $this->liste();
    // }
  
    // public function edit($id){
        
    //     $tdb = new TestRepository();
        
    //     $data['test'] = $tdb->getTest($id);
    //     var_dump($tdb->getTest($id));
    //     return $this->view->load("test/edit", $data);
    // }
}
?>