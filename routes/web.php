<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. NoAw create something great!
|
*/

use App\Http\Controllers;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/login');
});

use App\Http\Controllers\ShopController;
use App\Http\Controllers\DM3treeController;
use App\Http\Controllers\DM5treeController;
use App\Http\Controllers\HomeController;


Route::get('/New', [ShopController::class , 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register/{sponsor}', [App\Http\Controllers\PublicController::class, 'registerWithSponsor']);

Auth::routes();

use App\Http\Controllers\ProfileController;

//PROFILE ROUTE
Route::get('/Myprofile', [ProfileController::class , 'index']);
Route::get('/editMyProfile', [ProfileController::class , 'edit']);
Route::patch('/UpdateProfile/{user}', [ProfileController::class , 'UpdateProfile']);


use App\Http\Controllers\StudentController;
//Student model Controlelr
Route::get('/Student', [StudentController::class , 'index']);
Route::get('/Create/Student', [StudentController::class , 'create']);
Route::post('/Store/Student', [StudentController::class , 'store']);
Route::get('/Edit/Student/{student}', [StudentController::class , 'edit']);
Route::patch('/Update/Student/{student}', [StudentController::class , 'update']);

Route::get('/G1/Student/{student}', [StudentController::class , 'G1']);

Route::get('/G2/Student/{student}', [StudentController::class , 'G2']);
Route::get('/G3/Student/{student}', [StudentController::class , 'G3']);
Route::get('/G4/Student/{student}', [StudentController::class , 'G4']);


Route::get('/MarksAkhlak_1/{student}', [StudentController::class , 'MarksAkhlak_1']);
Route::patch('/Update/Marks/Akhlak_1/{student}', [StudentController::class , 'updateMarksAkhlak_1']);



Route::get('/Student/Report/{student}', [StudentController::class , 'report']);


use App\Http\Controllers\CikguController;

Route::get('/Cikgu/Student', [CikguController::class , 'index']);


use App\Http\Controllers\ActivityController;
Route::get('/Activity', [ ActivityController::class , 'index']);