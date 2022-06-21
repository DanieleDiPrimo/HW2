<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfiloController;
use App\Http\Controllers\CercaUtenteController;
use App\Http\Controllers\GiocaConMeController;
use App\Http\Controllers\RichiesteController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;


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
    return view('welcome');
});

Route::get('/registrazione', [RegController::class, 'simpleView'] );
Route::post('/registrazione', [RegController::class, 'createNewUser']);

Route::get('/login', [LogController::class, 'simpleView']); 
Route::post('/login', [LogController::class, 'controllo']); 

Route::get('/home', [HomeController::class, 'simpleView']);

Route::get('/profilo', [ProfiloController::class, 'simpleView']);

Route::get('/cerca_utente', [CercaUtenteController::class, 'simpleView']);

Route::get('/richieste', [RichiesteController::class, 'simpleView']);

Route::get('/logout', function () {
    session() -> flush();
    return redirect('login');
});

/*fetch*/ 
Route::get('/get_Info_User', [HomeController::class, 'getInfoUser']);
Route::get('/api_games',[HomeController::class, 'getApi']);
Route::get('/add_post/{titolo}/{url_img}', [HomeController::class, 'addPost']);
Route::get('/lista_post', [HomeController::class, 'listaPost']);
Route::get('/rimuovi_post/{titolo}', [HomeController::class, 'rimuoviPost']);
Route::get('/get_info_by_username/{username}', [CercaUtenteController::class, 'getInfoByUsername']);
Route::get('/gioca_con_me/{user_proprietario}/{titolo}', [GiocaConMeController::class, 'addinDB']);
Route::get('/get_richieste', [RichiesteController::class, 'getRichieste']); 



?>


