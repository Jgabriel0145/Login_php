<?php

namespace App\Controller;

use App\Model\LoginModel;


class LoginController extends Controller
{
    public static function index()
    {
        parent::render('Auth/FormLogin');
    }

    public static function auth()
    {
        $model = new LoginModel();

        $model->email = $_POST['email_login'];
        $model->senha = $_POST['senha_login'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado != null)
        {
            $_SESSION['usuario_logado'] = $usuario_logado;

            header('Location: /');
        }
        else 
            header('Location: /login?erro=true');
    }

    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }

    public static function form_cadastro()
    {
        $model = new LoginModel();
        
        parent::render('Auth/FormCadastro', $model);
    }

    public static function save()
    {
        $model = new LoginModel();

        $model->nome_cadastro = $_POST['nome_cadastro'];
        $model->email_cadastro = $_POST['email_cadastro'];
        $model->senha_cadastro = $_POST['senha_cadastro'];

        $model->save();
        

        header('Location: /login');
    }

    public static function AlterarDados()
    {
        $model = new LoginModel();

        $model->email_alterar = $_POST['email_alterar'];
        $model->senha_atual = $_POST['senha_atual'];
        $model->senha_alterar = $_POST['senha_alterar'];

    }


}