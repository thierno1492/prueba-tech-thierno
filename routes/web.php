<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\DashboardController;
use App\Http\Controllers\TareaReportController;
use App\Http\Controllers\CatTaskController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/ ',[HomeController::class, 'index']);
Route::get('/test',[DashboardController::class,'index'])->name('index');
Route::resource('/tarea_reports',TareaReportController::class);

Route::get('/tarea_reports/{id}/confirmDelete',[TareaReportController::class, 'confirmDelete'])->name('confirmDelete');
Route::get('/tarea_reports/{tareaReport}/cat_tasks/create',[CatTaskController::class ,'create'])->name('create');
Route::post('/tarea_reports/{tareaReport}/cat_tasks',[CatTaskController::class, 'store'])->name('store');
 */
Route::get('/ ',[HomeController::class, 'index']);
Route::resource('/tarea_reports',TareaReportController::class);
Route::get('/tarea_reports/{id}/confirmDelete',[TareaReportController::class, 'confirmDelete'])->name('confirmDelete');
Route::get('/tarea_reports/{id}/confirmSendMail',[TareaReportController::class, 'confirmSendMail'])->name('confirmSendMail');
Route::post('/tarea_reports/{id}/sendMail',[TareaReportController::class, 'sendMail'])->name('sendMail');
Route::get('/tarea_reports/{tareaReport}/cat_tasks/create',[CatTaskController::class ,'create'])->name('create');
Route::post('/tarea_reports/{tareaReport}/cat_tasks',[CatTaskController::class, 'store'])->name('store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
