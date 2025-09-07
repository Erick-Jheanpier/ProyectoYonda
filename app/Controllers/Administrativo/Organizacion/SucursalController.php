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
            'RUC'                => 'required|numeric|exact_length[11]',
            'sucursal'           => 'required|min_length[3]|max_length[40]',
            'direccion'          => 'required|min_length[5]|max_length[60]',
            'actividad_economica'=> 'required|min_length[3]|max_length[60]',
            'referencia'         => 'required|min_length[3]|max_length[50]',
            'iddistrito'         => 'required|integer'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->sucursalModel->save([
            'RUC'                 => $this->request->getPost('RUC'),
            'sucursal'            => $this->request->getPost('sucursal'),
            'direccion'           => $this->request->getPost('direccion'),
            'actividad_economica' => $this->request->getPost('actividad_economica'),
            'referencia'          => $this->request->getPost('referencia'),
            'iddistrito'          => $this->request->getPost('iddistrito'),
        ]);

        return redirect()->to('/sucursal')->with('success', 'Sucursal registrada correctamente.');
    }

    public function buscarRUC($ruc)
    {
        if (!preg_match('/^[0-9]{11}$/', $ruc)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                                  ->setJSON(['error' => 'RUC inválido']);
        }

        $client = \Config\Services::curlrequest();
        try {
             $response = $client->get("https://api.decolecta.com/ruc/{$ruc}", [
            "headers" => [
                "Content-Type"=>"application/json",
                "Authorization" => "sk_10086.FPibpDYc1uBIRTFEDfPsjb1BHqbTIw43", // 👈 depende del proveedor
                // o "x-api-key" => "TU_API_KEY_AQUI"
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return $this->response->setJSON($data);
        console.log(data);
        } catch (\Exception $e) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                                  ->setJSON(['error' => 'Error consultando RUC']);
        }
    }
}
