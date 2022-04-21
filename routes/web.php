<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
| le routeur reçoit « /user », Laravel ira dans la section UserControlleret
| invoquera la function index
*/
Route::get('/user', [UserController::class, 'index']);

/*
| routeur de Laravel va traiter tout ce qui suit post/ comme un paramètre, 
| et lui donne un nom slug lorsque Laravel l’envoie au backend
*/
Route::get('post/{slug}', [PostController::class, 'show']);

/*
| Et maintenant, quand nous avons besoin d’accéder à cette URL, tout ce que 
| nous devons faire est d’invoquer la fonction route('profile')
*/
Route::get('user/profile', [UserController::class, 'show'])->name('profile');

/*Route::get('/', [IndexController::class, 'index']);*/
Route::get('/', IndexController::class);
