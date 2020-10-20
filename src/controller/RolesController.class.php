<?php
use libs\system\Controller;
use src\model\RolesRepository;
class RolesController extends Controller
{
    private $data;
    public function __construct()
    {
        parent::__construct();
        // if(isset($_SESSION['user_session'])) {
        //     $this->data['user'] = $_SESSION['user_session'];
        // } else {
        //     $this->view->redirect('Login');
        // }
    }

    public function liste()
    {
        $rolesdb = new RolesRepository();
        $this->data['roles'] = $rolesdb->getAll();
        $this->data['title'] = 'Liste des roles';
        return $this->view->load("pages/roles/liste", $this->data);
    }

    public function getDataApi()
    {
        $roles = array();
        $rolesdb = new RolesRepository();
        foreach ($rolesdb->getAll() as $role)
        {
            $arrayrole = array();
            $arrayrole['id'] = $role->getId();
            $arrayrole['nom'] = $role->getNom();
            $roles[] = $arrayrole;
        }
        return $this->view->responseJson($roles);
    }
}
?>