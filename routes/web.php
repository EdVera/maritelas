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


Route::group(['as' => 'site.'], function () {

		Route::get('/', [
				'uses'	=> 	'HomeController@index',
				'as' 	=>	'index'
			]);

		Route::get('/blog', [
				'uses'	=> 	'HomeController@blog',
				'as' 	=>	'blog'
			]);

		/*Route::get('/Mail', function () {
		    return view('site.emails.presale');
		});*/

});

Route::group(['prefix' => 'admin'], function() {

	Route::get('/', [
      'uses'	=> 'SimagesController@index',
      'as' 	=> 'home'
    ]);

	Route::resource('simages','SimagesController');
	Route::get('simages/{id}/destroy', [
			'uses'	=>	'SimagesController@destroy',
			'as' 	=>	'simages.destroy'
		]);

	Route::resource('courses','CoursesController');
	Route::get('courses/{id}/destroy', [
			'uses'	=>	'CoursesController@destroy',
			'as' 	=>	'courses.destroy'
		]);

	Route::resource('products','ProductsController');
	Route::get('products/{id}/destroy', [
			'uses'	=>	'ProductsController@destroy',
			'as' 	=>	'products.destroy'
		]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy', [
			'uses'	=>	'ArticlesController@destroy',
			'as' 	=>	'articles.destroy'
		]);

});

// Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
//   Route::post('/reservs', [
//     'uses'  => 'ReservsController@reservations',
//     'as'    => 'reservs'
//   ]);
//   /* Para probar envíos - En el controller también hay un método test */
//   Route::post('/test', [
//     'uses'  => 'Contact@test',
//     'as'    => 'test'
//   ]);
// });
