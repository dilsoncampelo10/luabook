<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Auth;
use src\models\Post;
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
        $postsm = new Post();

        $data = $users->getById($_SESSION['auth']);

        $friends = $users->getWLimit(5,$_SESSION['auth']);

        $posts = $postsm->getAll();
     
        $this->render('home', 
        ['user' => $data,
        'friends'=>$friends,
        'posts'=>$posts]);
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
