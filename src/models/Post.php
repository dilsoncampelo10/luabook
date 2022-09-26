<?php

namespace src\models;

use core\Model;
use src\dao\PostDao;

class Post extends Model
{
    public function add(PostDao $p)
    {

        $stm = $this->con->prepare('INSERT INTO posts (id_user,created_at,body) VALUES (:id, NOW(), :body)');

        $stm->bindValue(':id', $p->getIdUser());
        $stm->bindValue(':body', $p->getBody());
        $stm->execute();
    }

    public function getAll()
    {
        $dataPosts = [];
        $stm = $this->con->query('SELECT * FROM posts ORDER BY created_at DESC');
        if ($stm->rowCount() > 0) {
            $data = $stm->fetchAll();
            foreach ($data as $d) {
                $p = new PostDao();

                $p->setId($d['id']);
                $p->setIdUser($d['id_user']);
                $p->setCreatedAt($d['created_at']);
                $p->setBody($d['body']);

                array_push($dataPosts, $p);
            }
        }
        return $dataPosts;
    }
}
