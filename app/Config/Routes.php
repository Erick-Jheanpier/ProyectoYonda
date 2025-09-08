<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta que contiene un / es la principal => www.miweb.com
$routes->get('/', 'Home::index');

//Las rutas que se acceden por GET son las que se utilizan como URL
//Cuando se tratan de POST son por FORMULARIO

//miweb.com/clientes
//$objeto->metodo()   Se utiliza cuando $objeto es una instancia de una clase
//Clase::metodo()     Se está utilizando un método sin instanciar la clase
$routes->get('/asistencia', 'AsistenciaController::index');


//personas
$routes->get('/personas', 'PersonasController::index');
$routes->get('/personas/registrar', 'PersonasController::select');
$routes->post('/personas/registrar', 'PersonasController::registrar');
$routes->post('/personas/provincias', 'PersonasController::provincias');
$routes->post('/personas/distritos', 'PersonasController::distritos');
$routes->post('/personas/sucursales', 'PersonasController::sucursales');
$routes->post('/personas/areas', 'PersonasController::areas');
$routes->post('/personas/cargos', 'PersonasController::cargos');

// Ruta para actualizar empleado
$routes->get('/personas/editar/(:num)', 'PersonasController::editar/$1');
$routes->post('/personas/actualizar', 'PersonasController::actualizar');


$routes->get('/personas/info/(:num)', 'PersonasController::info/$1');

// Áreas
$routes->get('/areas', 'Administrativo\Organizacion\AreasController::index');
$routes->post('/areas/store', 'Administrativo\Organizacion\AreasController::store');
$routes->post('/areas/update/(:num)', 'Administrativo\Organizacion\AreasController::update/$1');
$routes->delete('/areas/delete/(:num)', 'Administrativo\Organizacion\AreasController::delete/$1');

// Cargos
$routes->post('/cargos/store', 'Administrativo\Organizacion\CargosController::store');
$routes->post('/cargos/update/(:num)', 'Administrativo\Organizacion\CargosController::update/$1');
$routes->delete('/cargos/delete/(:num)', 'Administrativo\Organizacion\CargosController::delete/$1');


//ruta para colaboradores
$routes->get('/colaboradores', 'Administrativo\Organizacion\ColaboradoresController::index');

// Rutas para sucursales
$routes->get('/sucursal', 'Administrativo\Organizacion\SucursalController::index');
$routes->post('/sucursal/store', 'Administrativo\Organizacion\SucursalController::store');
$routes->get('/sucursal/buscar-ruc/(:num)', 'Administrativo\Organizacion\SucursalController::buscarRUC/$1');
$routes->get('/api/getDistritoId/(:any)', 'Administrativo\Organizacion\DistritoController::getDistritoId/$1');

//ruta para desvinculados
$routes->get('/desvinculados', 'Administrativo\Trabajadores\DesvinculadosController::index');

//ruta para otros
$routes->get('/otros', 'Administrativo\Trabajadores\OtrosController::index');

//ruta para registrar_personal
$routes->get('/registrar_personal', 'Administrativo\Trabajadores\Registrar_PersonalController::index');

//ruta para vacaciones
$routes->get('/vacaciones', 'Administrativo\Trabajadores\VacacionesController::index');

//ruta para vigentes
$routes->get('/vigentes', 'Administrativo\Trabajadores\VigentesController::index');

//ruta para item
$routes->get('/item', 'Configuracion\ItemController::index');

//ruta para plantilla
$routes->get('/plantilla', 'Plantillas\PlantillaController::index');

//ruta para prueba
$routes->get('/prueba', 'Plantillas\PruebaController::index');

//ruta para resumen
$routes->get('/resumen', 'ResumenController::index');



