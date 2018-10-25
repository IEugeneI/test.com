<form action="" method="post">
	{{csrf_field()}}
	ID:
	<input type="text" class="id"  name ="id" size="2" value="{{$authors->id}}" readonly/>
	Name:
	<input type="text" class="name" name="name" value="{{$authors->name}}" size="27"/>
	Second Name:
	<input type="text" class="second_name" name="second_name" value="{{$authors->second_name}}" size="27" />
	Last Name:
	<input type="text" class="last_name" name="last_name" value="{{$authors->last_name}}" size="27"/>
	Date of birthday
	<input type="date"  name="datebirth" value="{{$authors->date_birth}}" >
	<br/>
	<button type="submit" name="authorsupdate">Сохранить</button>
</form>