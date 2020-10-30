<?php
session_start();

use libs\system\Controller;
use src\model\UserRepository;

class UserController extends Controller
{
    private $data;
    private $userdb;
    
    public function __construct()
    {
        parent::__construct();
        $this->userdb = new UserRepository;
        if(isset($_SESSION['user_session'])) {
            $this->data['user'] = $_SESSION['user_session'];      
        } else {
            $this->view->redirect('Login');
        }
        if (!$this->isAdmin()) {
            return $this->view->redirect('Welcome');
        }
    }

    public function affichePageLogin()
    {
        return $this->view->load("administration/login/login");
    } 

    public function liste()
    {
        $user_db = new UserRepository();
        $this->data['users'] = $user_db->listeUser();
        $this->data['title'] = 'Liste des utilisateurs';

        return $this->view->load("pages/user/liste", $this->data);
    }

    private function isAdmin()
    {
        $roleA = $this->userdb->getRoleByName('ROLE_ADMIN');
        foreach ($this->data['user']->getRoles() as $role) {
            if ($roleA->getId() == $role->getId())
                return true;
        }
        return false;
    }

}
?>