<?php
namespace src\models;
use \core\Model;

class Auth extends Model {
    public static function checkSession(){
        if($_SESSION['auth']){
            
        }

        return false;
    }
}