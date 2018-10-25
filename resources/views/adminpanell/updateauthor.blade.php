@extends('admin')


@section('content')
<table class="updatebookstable">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>SecondName</td>
		<td>LastName</td>
		<td>DateBirthday</td>
	</tr>
	@foreach ($authors as $author)
	<tr>
		<td>{{ $author->id }}</td>
		<td>{{ $author->name }}</td>
		<td>{{ $author->second_name }}</td>
		<td>{{ $author->last_name }}</td>
		<td>{{ $author->date_birth }}</td>
		<td><a href="<?=URL::to('/')?>/admin/updateauthor/{{$author->id}}">Редатировать</a></td>
	</tr>
@endforeach
</table>
<?php if(isset($status)&!empty($status))
	echo $status;

?>
@stop