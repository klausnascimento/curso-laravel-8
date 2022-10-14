<?php

use App\Http\Controllers\{
    PostController
};
use Illuminate\Support\Facades\Route;

Route::get('post', [PostController::class, 'index']);

// $this->get('url', 'NomeController@index')->name('url.index');
// $this->get('url/create', 'NomeController@create')->name('url.create');
// $this->post('url', 'NomeController@store')->name('url.store');
// $this->get('url/{id}', 'NomeController@show')->name('url.show');
// $this->get('url/{id}/edit', 'NomeController@edit')->name('url.edit');
// $this->put('url/{id}', 'NomeController@update')->name('url.update');
// $this->delete('url/{id}', 'NomeController@destroy')->name('url.destroy');

Route::get('/', function () {
    return view('welcome');
});
