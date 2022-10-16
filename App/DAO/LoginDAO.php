<?php

namespace App\DAO;

use App\Model\LoginModel;
use \PDO;


class LoginDAO extends DAO 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectByEmailAndSenha($email, $senha)
    {
        $sql = 'SELECT * FROM usuario WHERE email = ? AND senha = sha1(?)';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        return  $stmt->fetchObject('App\Model\LoginModel');
    }

    public function insert(LoginModel $model)
    {
        $sql = 'INSERT INTO usuario (nome, email, senha) VALUES (?, ?, SHA1(?))';
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome_cadastro);
        $stmt->bindValue(2, $model->email_cadastro);
        $stmt->bindValue(3, $model->senha_cadastro);

        $stmt->execute();
    }
}