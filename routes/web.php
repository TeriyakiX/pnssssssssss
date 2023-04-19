<?php

use Src\Route;
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add('GET', '/Subdivisions', [Controller\Site::class, 'Subdivisions'])->middleware('auth');
Route::add('GET', '/Calculations', [Controller\Site::class, 'Calculations'])->middleware('auth');
Route::add('GET', '/CalculationsAnswer1', [Controller\Site::class, 'CalculationsAnswer1'])->middleware('auth');
Route::add('GET', '/CalculationsAnswer2', [Controller\Site::class, 'CalculationsAnswer2'])->middleware('auth');
Route::add('GET', '/SubdivisionsAnswer', [Controller\Site::class, 'SubdivisionsAnswer'])->middleware('auth');
Route::add('GET', '/roomView', [Controller\Site::class, 'roomView'])->middleware('auth');
Route::add('GET', '/AddUser', [Controller\Site::class, 'AddUser'])->middleware('admin');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);