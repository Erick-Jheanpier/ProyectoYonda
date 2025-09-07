<?php

namespace App\Models\Plantillas;

use App\Models\BaseModel;

class PruebaModel extends BaseModel
{
    public function index(): string
    {
        $datos['header'] = view('layouts/header');
        $datos['footer'] = view('layouts/footer');

        return view('Plantillas/Prueba', $datos);
    }
}