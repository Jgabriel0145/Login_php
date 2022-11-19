<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Model\UsuarioModel;


class UsuarioController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();

        $model = new UsuarioModel();
        $model->getAllRows();

       
        parent::render('Usuario/ListaUsuario', $model);
    }

    public static function form()
    {
        parent::isAuthenticated();

        $model = new UsuarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Usuario/FormUsuario', $model);
    }

    public static function save()
    {
        parent::isAuthenticated();

        $model = new UsuarioModel();

        $model->id =  $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /usuario");
    }

    public static function delete()
    {
        parent::isAuthenticated();
        
        $model = new UsuarioModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /usuario"); 
    }
}