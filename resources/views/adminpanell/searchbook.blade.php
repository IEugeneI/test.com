@extends('admin')


@section('content')
<table class="updatebookstable">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Publish Year</td>
		<td>Genre</td>
		<td>Author_Name</td>
		<td>Author Second Name</td>
		<td>Author Last Name</td>
	</tr>
<?php
foreach($info as $key){
	echo "<tr>";
	echo "<td>$key->id</td>";
	echo "<td>$key->name</td>";
	echo "<td>$key->publish_year</td>";
	echo "<td>$key->genre</td>";
	echo "<td>$key->authorname</td>";
	echo "<td>$key->second_name</td>";
	echo "<td>$key->last_name</td>";
	echo "</tr>";

}
?>
</table>
<br>

<form action="" method="post">
	{{csrf_field()}}
	Что ищешь смертный:
	<input type="text" name="search" size=27>
	<button type="submit" name="go">Искать</button>
</form>
<?php
if(isset($find)){
	echo "<p></p>";
	echo "Результат поиска:";
	echo "<p></p>";
	echo "<table class='updatebookstable'>";
		echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>Name</td>";
		echo "<td>Publish Year</td>";
		echo "<td>Genre</td>";
		echo "<td>Author_Name</td>";
		echo "<td>Author Second Name</td>";
		echo "<td>Author Last Name</td>";
		echo "</tr>";
	
	foreach ($find as  $value) {
		echo "<tr>";
		echo "<td>$value->id</td>";
		echo "<td>$value->name</td>";
		echo "<td>$value->publish_year</td>";
		echo "<td>$value->genre</td>";
		echo "<td>$value->authorname</td>";
		echo "<td>$value->second_name</td>";
		echo "<td>$value->last_name</td>";
		echo "</tr>";
	}
}
?>

@stop