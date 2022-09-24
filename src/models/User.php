<?php
namespace src\models;
use \core\Model;

class User extends Model {
    public static function emailExists($email){

        $u = User::select()->where('email',$email)->execute();
        var_dump($u);
        return true;
    }
}