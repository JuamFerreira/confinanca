<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContaController extends Controller
{
	public function index() {
		dd(auth()->user()->conta()->get());
		
		return view('painel.conta.index');
	}
}
