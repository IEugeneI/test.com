@extends('admin')



@section('content')

<div class="form-group">
	{{Form::open(array('action' => 'BooksController@added'))}}
	{!!Form::text('name')!!}
	{!!Form::label('Введите название книги')!!}
	<p></p>
	{!!Form::text('year')!!}
	{!!Form::label('Введите год издания книги')!!}
	<p></p>
	{!!Form::text('genre')!!}
	{!!Form::label('Введите жанр  книги')!!}
	<p></p>
	 {!! Form::select('author', $author, null, ['class' => 'form-control']) !!}
	{!!Form::label('Введите жанр  книги')!!}
	<p></p>
	{!!Form::submit('Добавить')!!}
	{{Form::close()}}
	<?php
	if(isset($status)&&!empty($status)){
		echo "<p style='color:red'>$status</p>";
	}
	?>
</div>

@stop