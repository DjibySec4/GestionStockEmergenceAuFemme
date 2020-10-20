<?php
use libs\system\Controller;

class RolesApiController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * http:server/RolesApi/getRolesJson
     */
    public function getRolesJson()
    {
        $roles = array();
        $rolesdb = new \src\model\RolesRepository();
        $rolesresult = $rolesdb->getAll();
        foreach ($rolesresult as $r)
        {
            $roles[] = array('id'=>$r->getId(), 'nom'=>$r->getNom());
        }
        return $this->view->responseJson($roles);
    }
}
?>