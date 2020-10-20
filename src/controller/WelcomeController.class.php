<?php

use libs\system\Controller;
class WelcomeController extends Controller{ 

    private $data;

    public function __construct(){
        parent::__construct();
      
        if(isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];    
        } 
        // else {
        //     echo "La session user_session n'existe pas car sa valeur est : ";
        //     var_dump($this->data['user']); die;
        //     return $this->view->redirect('Login');
        // }
    }
   
    public function index(){
        $this->data['title'] = "Gestion Stock";
        return $this->view->load("welcome/index", $this->data);
    }

}
?>