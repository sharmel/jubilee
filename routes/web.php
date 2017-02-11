<?php

use App\Services;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// Resource
Route::resource('/', 'WelcomeController');

// raw queries
Route::get('insert', function(){

	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['cake','cake designer','images/cake.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['photographer','photographers','images/photographers.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['event planner','event planners','images/eventplanners.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['Tailoring','Tailors','images/tailors.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['Event Hall','Event Halls','images/halls.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['Musician','Musicians','images/musicians.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['DJ','Disk Jonkey','images/djs.jpg',date('Y-m-d H:i:s')]);
	DB::insert('insert into services(name,description,image_src,created) values(?,?,?,?)',['MC','Master of Ceremony','images/mcs.jpg',date('Y-m-d H:i:s')]);
});

Route::get('read', function(){

	$result = DB::select("select * from services");

	return $result;

});

//Route::get('about/{id}', 'AboutController@index');

// Resource
Route::resource('about', 'AboutController');

Route::resource('contact', 'ContactController'); 

Route::resource('vendors', 'VendorsController');

Route::resource('blog', 'BlogController');

Route::resource('home', 'HomeController');

// ELOQUENT

Route::get('/orm', function(){

	$services  = Services::all();

	foreach ($services as $service) {
		
		echo $service->name;
	}

});


