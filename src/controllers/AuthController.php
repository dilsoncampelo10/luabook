<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Auth;
use \src\models\User;


class AuthController extends Controller {


    public function login() {
        $this->render('login');
    }

    public function register(){
        $this->render('register');
    }

    public function registerAction(){
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $birthdate = filter_input(INPUT_POST,'birthdate');
        $password = filter_input(INPUT_POST,'password');

        if($name && $email && $birthdate && $password){
            if(User::emailExists($email)){
                echo 'entrou';
            
            }
            
        } else{
            $_SESSION['flash'] = 'Preencha todos os campos corretamente';
            $this->redirect('/register');
        }
    }

  

}