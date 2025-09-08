<?php

namespace App\Models\Administrativo\Organizacion;

use CodeIgniter\Model;

class DistritoModel extends Model
{
    protected $table            = 'distritos';
    protected $primaryKey       = 'iddistrito';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'distrito',
        'idprovincia'
    ];
}
