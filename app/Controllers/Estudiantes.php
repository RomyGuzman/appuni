<?php

namespace App\Controllers;

class Estudiantes extends BaseController
{
    public function index()
    {
        return view('estudiantes'); // Esto carga app/Views/estudiantes.php
    }
}