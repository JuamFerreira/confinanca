@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>
	
	<ol class="breadcrumb">
		<li><a href="">Painel</a></li>
		<li><a href="">Saldo</a></li>
	</ol>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<a href="#" class="btn btn-primary"><i class="fa fa-share"></i> Depósito</a>
			<a href="#" class="btn btn-warning"><i class="fa fa-reply"></i> Saque</a>
		</div>
		<div class="box-body">
			<div class="small-box bg-green">
				<div class="inner">
					<h3><sup style="font-size: 20px">R$ </sup>{{number_format($saldo, 2,',', '')}}</h3>

					<p>Saldo atual</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
		</div>
	</div>
@stop
