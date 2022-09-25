<?php

namespace src\models;

use \core\Model;
use PDO;

class User extends Model
{
    public function emailExists($email)
    {

        $stm = $this->con->prepare('SELECT * FROM users WHERE email = :email');
        $stm->bindValue(':email', $email);
        $stm->execute();

        if ($stm->rowCount() === 0) {

            return true;
        }

        return false;
    }

    public function insertUser($name, $email, $birthdate, $password)
    {
        $stm = $this->con->prepare('INSERT INTO users (name,email,birthdate,password) VALUES (:name,:email,:birthdate,:password)');

        $stm->bindValue(':name', $name);
        $stm->bindValue(':email', $email);
        $stm->bindValue(':birthdate', $birthdate);
        $stm->bindValue('password', $password);

        $stm->execute();

        $id = $this->con->lastInsertId();

        return $id;
    }

    public function checkLogin($email, $password)
    {

        $stm = $this->con->prepare('SELECT * FROM users WHERE email = :email');
        $stm->bindValue(':email',$email);
        $stm->execute();
        
        $array = $stm->fetch(PDO::FETCH_ASSOC);

    
        if ($email === $array['email']) {
           
            if (password_verify($password,$array['password'])) {
                return true;
            } else {
                return false;
            }
        }
    }
}
