<?php

namespace src\models;

use \core\Model;
use \src\dao\UserDao;
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
        $stm->bindValue(':email', $email);
        $stm->execute();

        $array = $stm->fetch(PDO::FETCH_ASSOC);


        if ($email === $array['email']) {

            if (password_verify($password, $array['password'])) {
                return $array['id'];
            } else {
                return false;
            }
        }
    }

    public function getAll()
    {
        $stm = $this->con->query('SELECT * FROM users');
        $dataUser = [];
        $data = $stm->fetchAll();
        foreach ($data as $d) {
            $u = new UserDao();

            $u->setId($d['id']);
            $u->setName($d['name']);
            $u->setEmail($d['email']);
            $u->setBirthdate($d['birthdate']);

            array_push($dataUser, $u);
        }

        return $dataUser;
    }

    public function getById($id)
    {
        
        $stm = $this->con->prepare('SELECT * FROM users WHERE id = :id');
        $stm->bindValue(':id',$id);
        $stm->execute();

        if ($stm->rowCount() > 0) {
            $data = $stm->fetch(PDO::FETCH_ASSOC);
            $u = new UserDao();
            $u->setId($data['id']);
            $u->setName($data['name']);
            $u->setEmail($data['email']);
            $u->setBirthdate($data['birthdate']);

            return $u;
        }

        return false;
    }

    public function getWLimit($limit){
        $stm = $this->con->query('SELECT * FROM users LIMIT '.$limit);
       // $stm->bindValue(':limit',$limit);
      //  $stm->execute();
     //   echo 'SELECT * FROM users LIMIT '.$limit;
        $dataUser = [];
        if($stm->rowCount()>0){
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $d) {
                $u = new UserDao();
    
                $u->setId($d['id']);
                $u->setName($d['name']);
                $u->setEmail($d['email']);
                $u->setBirthdate($d['birthdate']);
    
                array_push($dataUser, $u);
            }
            
        }

        return $dataUser;
    }
}
