<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Admin\MasterData\ModuleController;
use illuminate\Support\Facades\Route;

// Route::resource('master-data/pegawai');

// Route::resource('master-data/pegawai', PegawaiController::class );
// Route::resource('master-data/module', ModuleController::class );



Route::get('master-data/pegawai', [PegawaiController::class, 'index']);
Route::get('master-data/pegawai/create', [PegawaiController::class, 'create']);
Route::post('master-data/pegawai', [PegawaiController::class, 'store']);
Route::get('master-data/pegawai/show/{pegawai}', [PegawaiController::class, 'show']);
Route::get('master-data/pegawai/edit/{pegawai}', [PegawaiController::class, 'edit']);
Route::get('master-data/pegawai/delete/{pegawai}', [PegawaiController::class, 'delete']);
Route::post('master-data/pegawai/update/{pegawai}', [PegawaiController::class, 'update']);



Route::get('master-data/module', [ModuleController::class, 'index']);
Route::get('master-data/module/create', [ModuleController::class, 'create']);
Route::post('master-data/module', [ModuleController::class, 'store']);
Route::get('master-data/module/show/{module}', [ModuleController::class, 'show']);
Route::get('master-data/module/edit/{module}', [ModuleController::class, 'edit']);
Route::get('master-data/module/delete/{module}', [ModuleController::class, 'delete']);
Route::post('master-data/module/update/{module}', [ModuleController::class, 'update']);


Route::redirect('/', 'admin/master-data/pegawai');
Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);