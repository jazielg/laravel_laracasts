<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function() {
    
//     return view('index', [
//         'tasks' => [
//             'Go to the store',
//             'Go to the market',
//             'Go to work'
//         ]
//     ]);
// });

// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/contact', function() {
//     return view('contact');
// });

Route::get('/myfirstsite', 'PagesController@index')->middleware('guest');
Route::get('/myfirstsite/about', 'PagesController@about');
Route::get('/myfirstsite/contact', 'PagesController@contact');

// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/edit', 'ProjectsController@edit');

// php artisan make:controller ProjectsController -r -m Project
Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'TaskController@store');
// Route::patch('/tasks/{task}', 'TaskController@update');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
