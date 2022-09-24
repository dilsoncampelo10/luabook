<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Auth;

class AuthController extends Controller {


    public function login() {
        $this->render('login');
    }

  

}