<?php

use Src\Route;
Route::add('GET', '/hello', [Controller\Site::class, 'hello']);
Route::add('GET', '/news', [Controller\Site::class, 'news']);
Route::add(['GET', 'POST'], '/newsCreate', [Controller\Site::class, 'newsCreate'])->middleware('admin');
Route::add(['GET', 'POST'], '/newsUpdate', [Controller\Site::class, 'newsUpdate'])->middleware('admin');
Route::add('GET', '/news-view', [Controller\Site::class, 'newsview']);
Route::add('GET', '/Subdivisions', [Controller\Site::class, 'Subdivisions']);
Route::add('GET', '/roomView', [Controller\Site::class, 'roomView']);
Route::add(['GET', 'POST'], '/addAdressBook', [Controller\Site::class, 'AddUser'])->middleware('admin');
Route::add('GET', '/searchdb', [Controller\Site::class, 'searchdb'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/destroy', [Controller\Site::class, 'destroy']);

