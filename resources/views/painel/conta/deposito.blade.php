@extends('adminlte::page')

@section('title', 'Área de depósito')

@section('content_header')
    <h1>Realizar depósito</h1>
	
	<ol class="breadcrumb">
		<li><a href="{{route('painel.home')}}">Painel</a></li>
		<li><a href="{{route('painel.conta')}}">Saldo</a></li>
		<li><a href="#">Depósito</a></li>
	</ol>
@stop

@section('content')
    <div class="box">
		<div class="box-header">
			<h3>Realizar depósito</h3>
		</div>
		<div class="box-body">
			<form method="POST" action="{{route('deposito.process')}}">
				{!! csrf_field() !!}
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Valor do depósito">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-sm btn-success">Enviar</button>
				</div>
			</form>
		</div>
	</div>
@stop
