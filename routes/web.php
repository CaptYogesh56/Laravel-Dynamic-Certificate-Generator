<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

Route::get('/create',  [CertificateController::class, 'create']);

Route::get('/certificate', [CertificateController::class, 'reg_form']);
Route::post('/certificate', [CertificateController::class, 'create_certificate']);

Route::get('/view-certificates', [CertificateController::class, 'view']);

Route::get('/show-certificate/{id}', [CertificateController::class, 'show']);