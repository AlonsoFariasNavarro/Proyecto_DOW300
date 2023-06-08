<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AdministradoresController;

//Inicio de sesion
Route::get('/',[HomeController::class,'login'])->name('home.login');
Route::post('/',[HomeController::class,'loginUser'])->name('home.loginUser');

//Estudiante
Route::get('/estudiante',[EstudiantesController::class,'index'])->name('estudiante.index');
Route::get('/estudiante/estado',[EstudiantesController::class,'status'])->name('estudiante.status');
Route::delete('/estudiante/{estudiante}/delete',[EstudiantesController::class,'destroy'])->name('estudiante.destroy');
Route::get('/estudiante/{estudiante}/edit',[EstudiantesController::class,'Eedit'])->name('estudiante.edit');
Route::put('/estudiante/{estudiante}/update',[EstudiantesController::class,'update'])->name('estudiante.update');
Route::post('/estudiante/store',[EstudiantesController::class,'store'])->name('estudiante.store');

//Profesor
Route::get('/profesor',[ProfesoresController::class,'index'])->name('profesor.index');
Route::get('/profesor/revision',[ProfesoresController::class,'revision'])->name('profesor.revision');
Route::delete('/profesor/{profesor}/delete',[ProfesoresController::class,'profesordestroy'])->name('profesor.destroy');
Route::put('/profesor/{profesor}/update',[ProfesoresController::class,'profesorupdate'])->name('profesor.update');
Route::post('/profesor/store',[ProfesoresController::class,'store'])->name('profesor.store');
Route::get('/profesor/comentar/{id}',[ProfesoresController::class,'comentar'])->name('profesor.comentar');
Route::get('/profesor/comentarios',[ProfesoresController::class,'mostrarComentarios'])->name('profesor.comentarios');
Route::post('/profesor/comentar/{id}/add',[ProfesoresController::class,'addComentario'])->name('profesor.addComentario');
Route::delete('/profesor/comentario/{rut}/delete',[ProfesoresController::class,'deleteComentario'])->name('profesor.deleteComentario');

//Admin
Route::get('/admin',[AdministradoresController::class,'index'])->name('admin.index');
Route::get('/admin/edit/{profesor}',[AdministradoresController::class,'edit'])->name('admin.edit');
Route::get('/admin/create/estudiantes',[AdministradoresController::class,'agregarEstudiante'])->name('admin.createE');
Route::get('/admin/create/profesores',[AdministradoresController::class,'agregarProfesor'])->name('admin.createP');
Route::get('/admin/estados',[AdministradoresController::class,'verestados'])->name('admin.estados');
Route::get('/admin/estados/{id}',[AdministradoresController::class,'editarEstados'])->name('admin.editarEstados');
Route::put('/admin/estados/{id}/update',[AdministradoresController::class,'estadoUpdate'])->name('admin.updateEstados');