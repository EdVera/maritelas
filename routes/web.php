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

	// Route::get('/correo', [
	// 	'uses'	=> 	'HomeController@correoTest',
	// 	'as' 	=>	'correoTest'
	// ]);

	Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {

			Route::get('/', [
					'uses'	=> 	'HomeController@blog',
					'as' 		=>	'index'
				]);

			Route::get('/{slug}', [
					'uses' 	=> 	'HomeController@article',
					'as'	  => 	'article'
				]);
	});

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
	Route::get('articles/{id}/{img}/destroysingleimage', [
			'uses'	=>	'ArticlesController@destroysingleimage',
			'as' 	=>	'articles.destroysingleimage'
		]);
	Route::post('articles/{img}/updatesingleimage', [
			'uses'	=>	'ArticlesController@updatesingleimage',
			'as' 	=>	'articles.updatesingleimage'
		]);
	Route::get('articles/{id}/{img}/editsingleimage', [
			'uses'	=>	'ArticlesController@editsingleimage',
			'as' 	=>	'articles.editsingleimage'
		]);

});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
  Route::post('/', [
    'uses'  => 'Contact@contact',
    'as'    => 'contact'
  ]);
});
