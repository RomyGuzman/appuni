<?php

namespace App\Controllers;

class Categorias extends BaseController
{
    public function index()
    {
        return view('categorias'); // Carga app/Views/categorias.php
    }
}
