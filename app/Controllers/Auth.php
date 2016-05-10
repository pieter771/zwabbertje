<?php
namespace App\Controllers;

use Core\View,
	Core\Model,
	Core\Controller,
	Helpers\Session,
	Helpers\Password,
	Helpers\Url;

class Auth extends Controller
{
	private $model;

	public function __construct()
	{
		$this->model = new \App\Models\Auth();
	}

public function login()
{
    if(Session::get('loggedin'))
    {
        Url::redirect();
    }

    if(isset($_POST['submit'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(Password::verify($password, $this->model->getHash($username)) === 0) 
        {
            $error[] = "Er is een verkeerde username of wachtwoord ingevuld!";
        } 
        else  
        {
            Session::set('loggedin', true);
            Session::set('memberID', $this->model->getID($username));

            $data = array('lastLogin' => date('Y-m-d G:i:s'));
            $where = array('memberID' => $this->model->getID($username));

            $this->model->update($data, $where);

            Url::redirect();
        }
    }

    $data['error'] = $error;
    $data['title'] = 'Login';
    View::rendertemplate('header', $data);
    View::render('auth/login', $data);
    View::rendertemplate('footer', $data);
}

	public function logout()
	{
		Session::destroy();
		Url::redirect();
	}
}