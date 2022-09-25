<?php

namespace src\dao;

class UserDao
{
    private $id;
    private $name;
    private $email;
    private $birthdate;
    private $password;

    public function setId($id)
    {
        $this->id = trim($id);
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = ucwords($name);
    }
    public function getName()
    {
        return $this->name;
    }
    public function setEmail($email)
    {
        $this->email = strtolower($email);
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function setPassword($password)
    {
        $this->password = $password;;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
