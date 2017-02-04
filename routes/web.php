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

Route::get('/', 'PagesController@index');

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users/', ['uses' => 'UsersController@store']);
/*
Route::get('users', function() {
	$users = [
		'0' => [
			'first_name' => 'Angga',
			'last_name' => 'Indriya',
			'location' => 'Sumatera'
		],
		'1' => [
			'first_name' => 'Denis',
			'last_name' => 'Tia',
			'location' => 'Kalimantan'
		]
	];
    return $users;
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/formadmin', function() {
	echo (Auth::user()->email === 'anggaindriya@gmail.com') ? "admin" : "user";
})->middleware('auth');

Route::resource('students', 'StudentsController');

Route::get('friends/{name?}', function($name = null) {
	echo "Hi, ".$name;
});

//latihan sik ////////////////

Route::resource('post', 'PostController', ['parameters' => ['post' => 'id']]); //one line is ok

//another line / casus
Route::get('user/{name?}', 'UsersController@user');

//Eloquent Relationship
Route::get('relation_hashmany', 'StudentsController@index');

//learning route
Route::group(['prefix' => 'admin'], function() {
	Route::get('rote', 'RoteController@index');
	Route::get('rote/form', 'RoteController@create');
	Route::post('proses_rote', 'RoteController@store')->name('proses_rote');
});

//latihane sampek kene sik///////////