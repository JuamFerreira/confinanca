<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Conta;

class Usuario extends Model
{
	public function conta() {
		return $this->hasOne(Conta::class);
	}
}
