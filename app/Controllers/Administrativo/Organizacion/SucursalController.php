<?php

namespace App\Controllers\Administrativo\Organizacion;

use App\Controllers\BaseController;
use App\Models\Administrativo\Organizacion\SucursalModel;
use CodeIgniter\HTTP\ResponseInterface;

class SucursalController extends BaseController
{
    protected $sucursalModel;

    public function __construct()
    {
        $this->sucursalModel = new SucursalModel();
    }

    public function index(): string
    {
        $datos['header'] = view('layouts/header');
        $datos['footer'] = view('layouts/footer');

        return view('Administrativo/Organizacion/Sucursal', $datos);
    }

    public function store()
    {
        $rules = [
            'sucursal'            => 'required|min_length[1]|max_length[40]',
            'direccion'           => 'required|min_length[1]|max_length[60]',
            'referencia'          => 'required|min_length[1]|max_length[50]',
            'iddistrito'          => 'required|integer'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->sucursalModel->save([
            'sucursal'            => $this->request->getPost('sucursal'),
            'direccion'           => $this->request->getPost('direccion'),
            'referencia'          => $this->request->getPost('referencia'),
            'iddistrito'          => $this->request->getPost('iddistrito'),
        ]);

        return redirect()->to('/sucursal')->with('success', 'Sucursal registrada correctamente.');
    }

}
