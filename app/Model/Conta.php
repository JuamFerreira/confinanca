<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public $timestamps = false;
	
	public function deposito($valor){
		dd($valor);
	}
}
