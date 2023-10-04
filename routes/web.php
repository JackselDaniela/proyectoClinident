<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Landing');
});
/*Index*/
Route::get('/Index', [App\Http\Controllers\IndexController::class, 'index'])->name('Index');
    Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
    Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
    Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
    Auth::routes();
    
    /* Registrar tratamiento*/ 
Route::get('/RegistrarT', [App\Http\Controllers\RegistrarTController::class, 'index'])->name('RegistrarT');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

    
    /* Calendario*/ 
Route::get('/Calendario', [App\Http\Controllers\CalendarioController::class, 'index'])->name('Calendario');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();
    
    /* Citas Confirmadas*/ 
Route::get('/CitasC', [App\Http\Controllers\CitasCController::class, 'index'])->name('CitasC');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

    /* Registro Expediente*/ 
Route::get('/RegistroE', [App\Http\Controllers\RegistroEController::class, 'index'])->name('RegistroE');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

    /* Historia Clinica*/ 
Route::get('/HistoriaC', [App\Http\Controllers\HistoriaCController::class, 'index'])->name('HistoriaC');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Ruta Tratamientoa*/ 
Route::get('/RutaT', [App\Http\Controllers\RutaTController::class, 'index'])->name('RutaT');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Solicitud Insumos*/ 
Route::get('/SolicitudI', [App\Http\Controllers\SolicitudIController::class, 'index'])->name('SolicitudI');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Nueva Carga */ 
Route::get('/NuevaC', [App\Http\Controllers\NuevaCController::class, 'index'])->name('NuevaC');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Ganancias Acumuladas */ 
Route::get('/GananciasA', [App\Http\Controllers\GananciasAController::class, 'index'])->name('GananciasA');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Tratamientos Realizados */ 
Route::get('/TratamientoR', [App\Http\Controllers\TratamientoRController::class, 'index'])->name('TratamientoR');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/*GESTION DE USUARIO */

/* Tratamientos Realizados */ 
Route::get('/GestionU', [App\Http\Controllers\GestionUController::class, 'index'])->name('GestionU');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Localización*/ 
Route::get('/Localizacion', [App\Http\Controllers\LocalizacionController::class, 'index'])->name('Localizacion');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Personalizar*/ 
Route::get('/Personalizar', [App\Http\Controllers\PersonalizarController::class, 'index'])->name('Personalizar');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Roles Y Permisos*/ 
Route::get('/RolesP', [App\Http\Controllers\RolesPController::class, 'index'])->name('RolesP');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Correo*/ 
Route::get('/Correo', [App\Http\Controllers\CorreoController::class, 'index'])->name('Correo');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Porcentajes*/ 
Route::get('/Porcentajes', [App\Http\Controllers\PorcentajesController::class, 'index'])->name('Porcentajes');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Cambiar Contraseña*/ 
Route::get('/CambioC', [App\Http\Controllers\CambioCController::class, 'index'])->name('CambioC');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Bitacora*/ 
Route::get('/Bitacora', [App\Http\Controllers\BitacoraController::class, 'index'])->name('Bitacora');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();


/* RespaldoB*/ 
Route::get('/RespaldoB', [App\Http\Controllers\RespaldoBController::class, 'index'])->name('RespaldoB');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Perfil*/ 
Route::get('/Perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('Perfil');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Editar Perfil*/ 
Route::get('/EditarP', [App\Http\Controllers\EditarPController::class, 'index'])->name('EditarP');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();



/* Contraseña Perfil*/ 
Route::get('/ContraseñaP', [App\Http\Controllers\ContraseñaPController::class, 'index'])->name('ContraseñaP');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Landing*/ 
Route::get('/Landing', [App\Http\Controllers\LandingController::class, 'index'])->name('Landing');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* Doctores*/ 
Route::get('/Doctores', [App\Http\Controllers\DoctoresController::class, 'index'])->name('Doctores');
Auth::routes();
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca.store');
Auth::routes();
Route::get('/marcas/{slug?}/edit', [App\Http\Controllers\MarcaController::class, 'edit'])->name('marca.edit');
Auth::routes();
Route::put('/update-marca/{slug?}', [App\Http\Controllers\MarcaController::class, 'update'])->name('marca.update');
Auth::routes();

/* añadir Doctores*/ 
Route::get('/AnadirD', [App\Http\Controllers\AnadirDController::class, 'index'])->name('AnadirD');
Auth::routes();
Route::post('/AnadirD', [App\Http\Controllers\AnadirDController::class, 'store'])->name('AnadirD.store');
Auth::routes();
Route::get('/AnadirD/{slug?}/edit', [App\Http\Controllers\AnadirDController::class, 'edit'])->name('AnadirD.edit');
Auth::routes();
Route::put('/update-AnadirD/{slug?}', [App\Http\Controllers\AnadirDController::class, 'update'])->name('AnadirD.update');
Auth::routes();
/* añadir Pacientes*/ 
Route::get('/AnadirP', [App\Http\Controllers\AnadirPController::class, 'index'])->name('AnadirP');
Auth::routes();
Route::post('/AnadirP', [App\Http\Controllers\AnadirPController::class, 'store'])->name('AnadirP.store');
Auth::routes();
Route::get('/Anadirp/{slug?}/edit', [App\Http\Controllers\AnadirPController::class, 'edit'])->name('AnadirP.edit');
Auth::routes();
Route::put('/update-AnadirP/{slug?}', [App\Http\Controllers\AnadirPController::class, 'update'])->name('AnadirP.update');
Auth::routes();


//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
