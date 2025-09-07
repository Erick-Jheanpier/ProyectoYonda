<?php

namespace App\Models\Administrativo\Trabajadores;

use App\Models\BaseModel;

class VacacionesModel extends BaseModel
{
    public function index(): string
    {
        $datos['header'] = view('layouts/header');
        $datos['footer'] = view('layouts/footer');

        return view('Administrativo/Trabajadores/Vacaciones', $datos);
    }
}