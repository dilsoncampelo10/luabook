<?php

namespace src\dao;

class PostDao
{
    private $id;
    private $idUser;
    private $createdAt;
    private $body;

    public function setId($id)
    {
        $this->id = trim($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = trim($idUser);
    }

    public function getIdUser()
    {
        return $this->idUser;
    }
    public function setCreatedAt($c)
    {
        $this->createdAt = $c;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setBody($body)
    {
        $this->body = trim($body);
    }
    public function getBody()
    {
        return $this->body;
    }
}
