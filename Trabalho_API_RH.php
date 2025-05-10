<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Departamento;
use App\Models\Funcionario;

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;

Route::apiResource('funcionarios', FuncionarioController::class);
Route::apiResource('departamentos', DepartamentoController::class);

Route::get('/funcionarios-com-departamentos', [FuncionarioController::class, 'withDepartamentos']);
Route::get('/departamentos-com-funcionarios', [DepartamentoController::class, 'withFuncionarios']);

Route::get('/funcionario/{id}/departamento', [FuncionarioController::class, 'departamento']);
Route::get('/departamento/{id}/funcionarios', [DepartamentoController::class, 'funcionarios']);
