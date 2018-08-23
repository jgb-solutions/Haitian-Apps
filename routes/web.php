<?php

// Auth::routes();

Route::get('/', 'PagesController@home');
Route::get('/categories', 'PagesController@categories');
Route::get('/about', 'PagesController@about');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
Route::get('/contact', 'PagesController@contact');

// Social Login
Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('auth.provider');
Route::get('/auth/{provider}/handle', 'Auth\AuthController@handleProvider')->name('auth.facebook.handle');

// works
Route::get('/works/{team}', 'WorksController@show')->name('works.show');
Route::get('/works', 'WorksController@index')->name('works.index');

// categories
Route::get('/categories/{team}', 'AdminController@categories_show')->name('categories.show');
// Route::get('/categories', 'AdminController@categories_index')->name('categories.index');

// admin stuff
Route::middleware(['auth'])->group(function() {
	// Users
	Route::get('/me', 'UsersController@index')->name('profile');
	Route::get('/me/edit', 'UsersController@edit')->name('profile.edit');
	Route::post('/me', 'UsersController@store')->name('profile.store');
	Route::put('/me', 'UsersController@update')->name('profile.update');
	Route::delete('/me/{work}', 'UsersController@delete')->name('profile.delete');

	// Works
	Route::get('/works/create', 'AdminController@works_create')->name('works.create');
	Route::post('/works', 'AdminController@works_store')->name('works.store');
	Route::get('/works/{work}/edit', 'AdminController@works_edit')->name('works.edit');
	Route::post('/works', 'AdminController@works_store')->name('works.store');
	Route::put('/works/{work}', 'AdminController@works_update')->name('works.update');
	Route::delete('/works/{work}', 'AdminController@works_delete')->name('works.delete');

	// Categories
	Route::get('/categories/create', 'AdminController@categories_create')->name('categories.create');
	Route::post('/categories', 'AdminController@categories_store')->name('categories.store');
	Route::get('/categories/{category}/edit', 'AdminController@categories_edit')->name('categories.edit');
	Route::post('/categories', 'AdminController@categories_store')->name('categories.store');
	Route::put('/categories/{category}', 'AdminController@categories_update')->name('categories.update');
	Route::delete('/categories/{category}', 'AdminController@categories_delete')->name('categories.delete');

	// Tags
	Route::get('/tags/create', 'AdminController@tags_create')->name('tags.create');
	Route::post('/tags', 'AdminController@tags_store')->name('tags.store');
	Route::get('/tags/{team}/edit', 'AdminController@tags_edit')->name('tags.edit');
	Route::post('/tags', 'AdminController@tags_store')->name('tags.store');
	Route::put('/tags/{team}', 'AdminController@tags_update')->name('tags.update');
	Route::delete('/tags/{team}', 'AdminController@tags_delete')->name('tags.delete');
});