<?php

namespace App\Model;

use App\DAO\LoginDAO;


class LoginModel extends Model
{

    public $id, $nome, $email, $senha;
    public $nome_cadastro, $email_cadastro, $senha_cadastro;
    public $senha_atual, $senha_alterar, $email_alterar;

    public function autenticar()
    {
        $dao = new LoginDAO();

        $dados_usuario_logado = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if (is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;          
    }

    public function save()
    {
        $dao = new LoginDAO();

        $dao->insert($this);
    }

}