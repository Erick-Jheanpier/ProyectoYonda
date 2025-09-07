<?php

namespace App\Models\Administrativo\Organizacion;

use App\Models\BaseModel;

class ColaboradoresModel extends BaseModel
{
    public function index(): string
    {
        $datos['header'] = view('layouts/header');
        $datos['footer'] = view('layouts/footer');

        return view('Administrativo/Organizacion/Colaboradores', $datos);
    }
}