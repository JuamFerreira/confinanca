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

$this->group(['middleware' =>['auth'], 'namespace' => 'Painel', 'prefix' => 'painel'], function(){
	$this->post('conta/deposito', 'ContaController@depositoProcess')->name('deposito.process');
	$this->get('conta/deposito', 'ContaController@deposito')->name('conta.deposito');
	$this->get('conta',	'ContaController@index')->name('painel.conta');
	
	$this->get('/', 'PainelController@index')->name('painel.home');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
