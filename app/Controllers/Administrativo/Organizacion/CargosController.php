<?php
namespace App\Controllers\Administrativo\Organizacion;

use App\Controllers\BaseController;
use App\Models\Administrativo\Organizacion\CargosModel;

class CargosController extends BaseController
{
    protected $cargosModel;

    public function __construct()
    {
        $this->cargosModel = new CargosModel();
    }

    public function store()
    {
        $rules = [
            'cargo' => 'required|min_length[3]',
            'idarea'=> 'required|is_natural_no_zero'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('error', 'Datos inválidos.');
        }

        $this->cargosModel->save([
            'cargo' => $this->request->getPost('cargo'),
            'idarea'=> $this->request->getPost('idarea')
        ]);

        return redirect()->to('/areas')->with('success', 'Cargo registrado.');
    }

    public function update($id)
    {
        $this->cargosModel->update($id, [
            'cargo' => $this->request->getPost('cargo'),
            'idarea'=> $this->request->getPost('idarea')
        ]);
        return redirect()->to('/areas')->with('success', 'Cargo actualizado.');
    }

    public function delete($id)
    {
        $this->cargosModel->delete($id);
        return redirect()->to('/areas')->with('success', 'Cargo eliminado.');
    }
}
