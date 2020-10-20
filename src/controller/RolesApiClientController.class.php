<?php
use libs\system\Controller;

class RolesApiClientController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * http:server/RolesApi/getRolesClient
     */
    public function getRolesClient()
    {
        return $this->view->load('roles/clientapi');
    }
}
?>