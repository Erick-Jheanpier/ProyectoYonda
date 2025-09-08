<?php
namespace App\Models\Administrativo\Organizacion;

use CodeIgniter\Model;

class CargosModel extends Model
{
    protected $table      = 'cargos';
    protected $primaryKey = 'idcargo';
    protected $allowedFields = ['cargo', 'idarea'];
    protected $returnType = 'array';
}
