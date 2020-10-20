<?php

namespace src\model; 

use libs\system\Model; 
	
class UserRepository extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getUser($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('User')->find(array('id' => $id));
		}
	}
	
	public function addUser($user)
	{
		if($this->db != null)
		{
			$this->db->persist($user);
			$this->db->flush();

			return $user->getId();
		}
	}
	
	public function deleteUser($id){
		if($this->db != null)
		{
			$user = $this->db->find('User', $id);
			if($user != null)
			{
				$this->db->remove($user);
				$this->db->flush();
			}else {
				die("Objet ".$id." n'existe pas");
			}
		}
	}
	
	public function updateUser($user){
		if($this->db != null)
		{
			$u = $this->db->find('User', $user->getId());
			if($u != null)
			{
				$u->setNom($user->getNom());
				$u->setPrenom($user->getPrenom());
                $u->setEmail($user->getEmail());
                $u->setPassword($user->getPassword());
                $u->setPassword($user->getPassword());
                $u->setPassword($user->getPassword());
                $u->setRoles($user->getRoles());
				$this->db->flush();

			}else {
				die("Objet ".$user->getId()." n'existe pas!!");
			}	
		}
	}
	
	public function listeUser(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT u FROM User u")->getResult();
		}
	}

	// Vérifie si l'email et le pasword saisie est conforme à la BD.
	public function getUserByLogin($email, $password = '')
	{
		$sql = 'SELECT u FROM User u WHERE u.email = :em ';
        $query = $this->db->createQuery($sql);
		$query->setParameter('em', $email);
		$user = $query->getOneOrNullResult();
		if($user != null){
			if ($password != '') {
				return password_verify($password, $user->getPassword()) ? $user : null;
			}
			else{
				return $user;
			}
		} else {
			return null;
		}
        // return $this->db->getRepository('User')->find(array('email' => $email, 'password' => $password));
	}

	// Recupére un role dans la BD via son nom.
    public function getRoleByName($nom){
        $query = $this->db
            ->createQuery('SELECT r FROM Roles r WHERE r.nom = :nomR')
            ->setParameter('nomR', $nom);
        $role = $query->getOneOrNullResult();
        return $role;
    }
    
	public function getRoleById($id)
	{
		$query = $this->db
			->createQuery('SELECT r FROM Roles r WHERE r.id = :idR')
			->setParameter('idR', $id);
		$role = $query->getSingleResult();
		return $role;
	}
	
}