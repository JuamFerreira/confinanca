<?php

use Illuminate\Database\Seeder;
use App\Model\Usuario;

class UsuariosTabelaSemeador extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		Usuario::create([
			'user_id' => '1',
			'nome' => 'Administrador Maior',
			'documento' => '12345678910'
		]);
		
		Usuario::create([
			'user_id' => '2',
			'nome' => 'Gerentão du bom',
			'documento' => '14395073960'
		]);
	}
}
