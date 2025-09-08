<?php
namespace App\Controllers\Administrativo\Organizacion;

use App\Controllers\BaseController;
use App\Models\Administrativo\Organizacion\AreasModel;
use App\Models\Administrativo\Organizacion\CargosModel;
use App\Models\Administrativo\Organizacion\SucursalModel;

class AreasController extends BaseController
{
    protected $areasModel;
    protected $cargosModel;
    protected $sucursalesModel;

    public function __construct()
    {
        $this->areasModel      = new AreasModel();
        $this->cargosModel     = new CargosModel();
        $this->sucursalesModel = new SucursalModel();
    }

    public function index(): string
{
    $datos['header']     = view('layouts/header');
    $datos['footer']     = view('layouts/footer');

    // Paginamos las áreas (5 por página)
    $datos['areas'] = $this->areasModel
                            ->select('areas.*, sucursales.sucursal')
                            ->join('sucursales', 'sucursales.idsucursal = areas.idsucursal')
                            ->paginate(2);

    $datos['pager']      = $this->areasModel->pager;

    $datos['cargos']     = $this->cargosModel
                                ->select('cargos.*, areas.area')
                                ->join('areas', 'areas.idarea = cargos.idarea')
                                ->findAll();

    $datos['sucursales'] = $this->sucursalesModel->findAll();

    return view('Administrativo/Organizacion/Areas', $datos);
}


    public function store()
    {
        $rules = [
            'area'      => 'required|min_length[3]',
            'idsucursal'=> 'required|is_natural_no_zero'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('error', 'Datos inválidos.');
        }

        $this->areasModel->save([
            'area'       => $this->request->getPost('area'),
            'idsucursal' => $this->request->getPost('idsucursal')
        ]);

        return redirect()->to('/areas')->with('success', 'Área creada correctamente.');
    }

    public function update($id)
    {
        $this->areasModel->update($id, [
            'area'       => $this->request->getPost('area'),
            'idsucursal' => $this->request->getPost('idsucursal')
        ]);
        return redirect()->to('/areas')->with('success', 'Área actualizada.');
    }

    public function delete($id)
    {
        $this->areasModel->delete($id);
        return redirect()->to('/areas')->with('success', 'Área eliminada.');
    }
}

