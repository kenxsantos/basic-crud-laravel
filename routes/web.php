<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\WeatherController;
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
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::post('/submit', function () {
//     return 'Form submitted successfully!';
// });  

// Route::put('/update/{id}', function ($id) {
//     return "Updated record with ID: $id";
// });  

// Route::delete('/delete/{id}', function ($id) {
//     return "Deleted record with ID: $id";
// });  


Route::resource('/students', StudentController::class);
Route::get('/qrcode', [QrCodeController::class, 'index']);