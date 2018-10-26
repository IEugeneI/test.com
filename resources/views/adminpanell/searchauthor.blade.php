@extends('admin')

@section('content')
<table class="updatebookstable">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Second Name</td>
		<td>Last Name</td>
		<td>Birthday</td>
		<td>Count of books</td>
	</tr>
	<?php
	foreach ($info as  $value) {
		echo "<tr>";
		echo "<td>$value->id</td>";
		$k=$value->id;
		echo "<td>$value->name</td>";
		echo "<td>$value->second_name</td>";
		echo "<td>$value->last_name</td>";
		echo "<td>$value->date_birth</td>";
		echo "<td>$count[$k]</td>";
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
	if(isset($result)){
		echo"<p>Результат поиска:</p>";
		echo "<table class='updatebookstable'>";
		echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>NAme</td>";
		echo "<td>Second_name</td>";
		echo "<td>LAst_name</td>";
		echo "<td>Birthday</td>";
		echo "<td>Count of books</td>";
		echo "</tr>";
		foreach ($result as $res){
			echo "<tr>";
			echo "<td>$res->id</td>";
			$k=$res->id;
			echo "<td>$res->name</td>";
			echo "<td>$res->second_name</td>";
			echo "<td>$res->last_name</td>";
			echo "<td>$res->date_birth</td>";
			echo "<td>$count[$k]</td>";
			echo "</tr>";
			echo "</tr>";
		}
		echo "</table";
	}
?>

@stop