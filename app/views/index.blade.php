@extends('layouts.master')

	@section('jumbotrom')
		<h1>Bienvenidos Padres De Familia</h1>
		<h4> 
			La familia y la escuela comparten un objetivo común; la formación integral y armónica del niño a lo largo de los distintos períodos del desarrollo humano y del proceso educativo.  Aquí usted conocerá todas las actividades y trabajos que se llevaran a cabo durante los respectivos periodos escolares de su hijo.
		</h4>
	@stop

	@section('contentL')
		<h2>Matriculas</h2>
		{{ HTML::link('matriculas', 'Más detalles  &raquo;', array('class'=>'btn btn-default')) }}
	@stop

	@section('contentC')
		<h2>Calendario Escolar</h2>
        {{ HTML::link('calendario', 'Más detalles  &raquo;', array('class'=>'btn btn-default')) }}
	@stop

	@section('contentR')
		<h2>Mas informacion</h2>
        {{ HTML::link('more_info', 'Más detalles  &raquo;', array('class'=>'btn btn-default')) }}
	@stop