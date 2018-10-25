@extends('admin')

@section('content')
	{{Form::open(array('action' => 'AuthorsController@added'))}}
	{!!Form::text('name')!!}
	{!!Form::label('Введите имя автора')!!}
	<p></p>
	{!!Form::text('second_name')!!}
	{!!Form::label('Введите отчество автора')!!}
	<p></p>
	{!!Form::text('last_name')!!}
	{!!Form::label('Введите фамилию автора')!!}
	<p></p>
	{!!Form::date('date', \Carbon\Carbon::now());!!}
	{!!Form::label('Введите год рождения автора')!!}
	<p></p>
	{!!Form::submit('Добавить')!!}
	{{Form::close()}}
	<?php
	if(isset($status)&&!empty($status)){
		echo "<p style='color:red'>$status</p>";
	}
	?>

@stop