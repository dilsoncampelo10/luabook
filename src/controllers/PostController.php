<?php

namespace src\controllers;

use \core\Controller;
use src\dao\PostDao;
use \src\models\Auth;
use src\models\User;
use src\models\Post;

class PostController extends Controller
{

    public function __construct()
    {

        $user = Auth::checkSession();


        if (!$user) {
            $this->redirect('/login');
        }
    }

    public function addPost()
    {
        $p = new Post();

        $body = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS);

        if ($body) {

            $post = new PostDao();

            $post->setIdUser($_SESSION['auth']);

            $post->setBody($body);

            $p->add($post);

            $this->redirect('/');
        }
    }



    public function sobreP($args)
    {
        print_r($args);
    }
}
