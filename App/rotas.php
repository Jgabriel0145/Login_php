<?php

use App\Controller\InicioController;
use App\Controller\UsuarioController;
use App\Controller\LoginController;
use App\Controller\PessoaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) 
{
    case '/':
        InicioController::index();
    break;


    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/login/cadastro':
        LoginController::form_cadastro();
    break;

    case '/login/cadastro/save':
        LoginController::save();
    break;

    case '/logout':
        LoginController::logout();
    break;


    case '/usuario':
        UsuarioController::index();
    break;

    case '/usuario/form':
        UsuarioController::form();
    break;

    case '/usuario/form/save':
        UsuarioController::save();
    break;

    case '/usuario/delete':
        UsuarioController::delete();
    break;
    

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    default:
        header('Location: /login');
    break;
}