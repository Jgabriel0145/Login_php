<?php 

namespace App\Controller;

class InicioController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();

        parent::render('Inicio');
    }
}