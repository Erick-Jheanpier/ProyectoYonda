<?php

namespace App\Controllers\Administrativo\Organizacion;

use App\Controllers\BaseController;
use App\Models\Administrativo\Organizacion\DistritoModel;

class DistritoController extends BaseController
{
    protected $distritoModel;

    public function __construct()
    {
        $this->distritoModel = new DistritoModel();
    }

    public function getDistritoId($nombre = "")
    {
        $nombre = trim($nombre);
        if ($nombre === '') {
            return $this->response->setJSON(['iddistrito' => null]);
        }

        // buscar case-insensitive en PHP (más tolerante a mayúsculas/minúsculas/acentos)
        $all = $this->distritoModel->findAll();
        foreach ($all as $d) {
            if (strcasecmp($d['distrito'], $nombre) === 0) {
                return $this->response->setJSON([
                    'iddistrito' => $d['iddistrito'],
                    'distrito'   => $d['distrito']
                ]);
            }
        }

        // si no encuentra, devolver null (el frontend decidirá)
        return $this->response->setJSON(['iddistrito' => null]);
    }
}
