<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AdministradoresController;

//Inicio de sesion
Route::get('/',[HomeController::class,'login'])->name('home.login');

//Estudiante
Route::get('/estudiante',[EstudiantesController::class,'index'])->name('estudiante.index');
Route::get('/estudiante/estado',[EstudiantesController::class,'status'])->name('estudiante.status');
Route::get('/estudiante/create',[EstudiantesController::class,'create'])->name('estudiante.create');

//Profesor
Route::get('/profesor',[ProfesoresController::class,'index'])->name('profesor.index');
Route::get('/profesor/revision',[ProfesoresController::class,'revision'])->name('profesor.revision');

//Admin
Route::get('/admin',[AdministradoresController::class,'index'])->name('admin.index');