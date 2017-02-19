<?php

use App\Service;
use App\Vendor;
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

	DB::insert('insert into vendors(first_name,last_name,username,created_at) values(?,?,?,?)',['new','test','new-test',date('Y-m-d H:i:s')]);
	DB::insert('insert into vendors(first_name,last_name,username,created_at) values(?,?,?,?)',['new1','test1','new-test1',date('Y-m-d H:i:s')]);
});

Route::get('read', function(){

	$result = DB::select("select * from services");

	return $result;

});

//Route::get('about/{id}', 'AboutController@index');

// Resource
Route::resource('about', 'AboutController');

Route::resource('contact', 'ContactController'); 
//wrap in a group so that I can use the error

Route::group(['middleware' => 'web'], function(){

Route::resource('vendors', 'VendorController');

});

Route::resource('blog', 'BlogController');

Route::resource('home', 'HomeController');
Route::resource('service', 'ServiceController');

// ELOQUENT

Route::get('/orm', function(){

	$services  = Service::all();

	foreach ($services as $service) {
		
		echo $service->name;
	}

});
// Many to many

Route::get('vendor/{id}/service', function($id){

	$vendor = Vendor::find($id)->services()->orderBy('id','desc')->get();

	return $vendor;

});


