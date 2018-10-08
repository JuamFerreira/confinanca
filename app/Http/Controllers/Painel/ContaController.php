<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Conta;

class ContaController extends Controller
{
	public function index(){
		
		$conta = auth()->user()->usuario->conta;
		$saldo = (isset($conta))? $conta->montante : 0;
		
		return view('painel.conta.index', compact('saldo'));
	}
	
	public function deposito(){
		return view('painel.conta.deposito');
	}
	
	public function depositoProcess(Request $requer){
		/* Para ser usado se passar objeto Conta por parêmetro */
//		$conta->deposito($requer->valorDeposito);
		
		$conta = auth()->user()->usuario->conta->firstOrCreate([]);
		$conta->deposito($requer->valorDeposito);
	}
}
