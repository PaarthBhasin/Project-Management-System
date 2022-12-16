<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SubprojectController;

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/subproject', [SubprojectController::class, 'index']);

Route::post('/subproject', [SubprojectController::class, 'postsub']);
Route::delete('/subproject', [SubprojectController::class, 'deletesub']);