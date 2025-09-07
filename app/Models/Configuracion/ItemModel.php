<?php

namespace App\Models\Configuracion;

use App\Models\BaseModel;

class ItemModel extends BaseModel
{
    public function index(): string
    {
        $datos['header'] = view('layouts/header');
        $datos['footer'] = view('layouts/footer');

        return view('Configuracion/Item', $datos);
    }
}