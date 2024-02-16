<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupsController;
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

Route::get('/', 'App\Http\Controllers\GroupsController@index')->name('index');

Route::get('/student/{id}', 'App\Http\Controllers\StudentsController@student')->name('student');

Route::get('/group/{group}', 'App\Http\Controllers\GroupsController@group')->name('group');
Route::get('/create/group', 'App\Http\Controllers\GroupsController@form')->name('groupFormCreate');
Route::post('/create/group', 'App\Http\Controllers\GroupsController@create')->name('groupCreate');


Route::get('/supervisors', 'App\Http\Controllers\SuperVisorController@index')->name('supervisors');
Route::get('/create/supervisor', 'App\Http\Controllers\SuperVisorController@formCreate')->name('superFormCreate');
Route::post('/create/supervisor', 'App\Http\Controllers\SuperVisorController@create')->name('superCreate');
Route::get('/edit/supervisor/{id}', 'App\Http\Controllers\SuperVisorController@formEdit')->name('superFormEdit');
Route::post('/edit/supervisor{id}', 'App\Http\Controllers\SuperVisorController@edit')->name('superEdit');

