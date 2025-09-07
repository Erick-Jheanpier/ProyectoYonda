<?php

namespace App\Models\Administrativo\Organizacion;


use CodeIgniter\Model;

class SucursalModel extends Model
{
    protected $table            = 'sucursales';   // 👈 pon aquí el nombre real de tu tabla
    protected $primaryKey       = 'id';           // 👈 cambia según tu tabla
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'RUC',
        'sucursal',
        'direccion',
        'actividad_economica',
        'referencia',
        'iddistrito'
    ];

    protected $useTimestamps = true;   // si tu tabla tiene created_at y updated_at
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
