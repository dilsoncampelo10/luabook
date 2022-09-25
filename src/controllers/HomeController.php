<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Auth;
use src\models\User;

class HomeController extends Controller
{

    public function __construct()
    {

        $user = Auth::checkSession();

       
        if (!$user) {
            $this->redirect('/login');
        }

      
    }

    public function index()
    {
        $users = new User();
        $data = $users->getAll();
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('/login');
    }

    public function sobreP($args)
    {
        print_r($args);
    }
}
