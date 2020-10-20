<?php
use libs\system\Controller;
use src\model\UserRepository;

class NationaliteController extends Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->view->load("pages/nationalite/index");
    } 

    // public function liste()
    // {
    //     $user_db = new UserRepository();
    //     $data['users'] = $user_db->listeUser();
    //     $data['title'] = 'Liste des utilisateurs';

    //     return $this->view->load("administration/user/liste", $data);
    // }

    

}
?>