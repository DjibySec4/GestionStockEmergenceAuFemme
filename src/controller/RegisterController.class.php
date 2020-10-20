<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\model\RolesRepository;
class RegisterController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // Affiche le formulaire de création de compte
    public function index()
    {
        return $this->view->load("pages/user/register");
    }

    // Crée le compte
    public function registe()
    {
        $userdb = new UserRepository();
        $user = new User();
        $user->setNom($_POST['nom']);
        $user->setPrenom($_POST['prenom']);
        $user->setEmail($_POST['email']); 
        $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
        //Gestion des roles
        $roles = array();
        try {
            $roles[] = $userdb->getRoleByName('ROLE_USER');
            $roles[] = $userdb->getRoleByName('ROLE_ADMIN');
            $roles[] = $userdb->getRoleByName('ROLE_GESTIONNAIRE');
        } catch (Exception $ex) {
            //Si les roles n'existe pas, on les crée et on les recupere

            //Creation du role "User"
            $roledb = new RolesRepository();
            $roleUser = new Roles();
            $roleUser->setNom('ROLE_USER');
            $roledb->add($roleUser);
            $roles[] = $userdb->getRoleByName('ROLE_USER');
            //Creation du role "Admin"
            $roleAdmin = new Roles();
            $roleAdmin->setNom('ROLE_ADMIN');
            $roledb->add($roleAdmin);
            $roles[] = $userdb->getRoleByName('ROLE_ADMIN');

            //Creation du role "Gestionnaire"
            $roleGestionnaire = new Roles();
            $roleGestionnaire->setNom('ROLE_GESTIONNAIRE');
            $roledb->add($roleGestionnaire);
            $roles[] = $userdb->getRoleByName('ROLE_GESTIONNAIRE');
        }
        //Affectation des role à l'utilisateur
        $user->setRoles($roles);
        //ajout de l'utilisateur dans la base de donnees
        $userdb->addUser($user);
        return $this->view->redirect("Login");
    }
}
?>
