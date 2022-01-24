<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Clientes extends Controller 
{

    public function index()
    {
       return "Index Clientes";
    }
}

/*
    Principais métodos: findAll(); first(); insert(); update(); delete();
*/
?>