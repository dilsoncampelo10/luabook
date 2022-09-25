<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Auth;
use \src\models\User;


class AuthController extends Controller
{


    public function login()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function registerAction()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $password = filter_input(INPUT_POST, 'password');

        if ($name && $email && $birthdate && $password) {
            $u = new User();
            if ($u->emailExists($email)) {

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $_SESSION['auth'] = $u->insertUser($name, $email, $birthdate, $hash);
                
                $this->redirect('/');
                
            } else {
                $_SESSION['flash'] = 'E-mail já cadastrado';
                $this->redirect('/register');
            }
        } else {
            $_SESSION['flash'] = 'Preencha todos os campos corretamente';
            $this->redirect('/register');
        }
    }


    public function loginAction()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        if ($email && $password) {
            $u = new User();
            $_SESSION['auth'] = $u->checkLogin($email, $password);
            
            $this->redirect('/');
        } else {
            $this->redirect('/login');
        }
    }
}
