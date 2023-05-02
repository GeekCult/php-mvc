<?php 

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class UserController
{

	public function listUser(int $id, RouteCollection $routes)
	{
        $user = new User();
        $user->find($id);

        require_once APP_ROOT . '/app/views/user.php';
	}

	public function listUsers(RouteCollection $routes)
	{
        $users = new User();
        $recordset = $users->findAll();

        require_once APP_ROOT . '/app/views/user.php';
	}


	public function createUser(RouteCollection $routes)
	{
        $data = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'address' => $_POST['address'],
            'number' => $_POST['number'],
            'city' => $_POST['city'],
        );

        $user = new User();
        $id = $user->create($data);

        header("Location: /users");
        exit();
	}

	public function deleteUser(int $id, RouteCollection $routes)
	{
        $user = new User();
        $user->delete($id);

        header("Location: /users");
        exit();
	}
}