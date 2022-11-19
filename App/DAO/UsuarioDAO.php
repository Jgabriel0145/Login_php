<?php

namespace App\DAO;

use App\Model\UsuarioModel;
use \PDO;


class UsuarioDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(UsuarioModel $model)
    {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, SHA1(?))";
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);


        $stmt->execute();
    }

    public function update(UsuarioModel $model)
    {
        $sql = "UPDATE usuario SET nome=?, email=?, senha=SHA1(?) WHERE id=? ";
        $stmt = $this->conexao->prepare($sql);
        
        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->id);
        
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\UsuarioModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
