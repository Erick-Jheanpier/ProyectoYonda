<?php
namespace App\Models\Administrativo\Organizacion;

use CodeIgniter\Model;

class AreasModel extends Model
{
    protected $table      = 'areas';
    protected $primaryKey = 'idarea';
    protected $allowedFields = ['area', 'idsucursal'];
    protected $returnType = 'array';
}
