@extends('admin')



@section('content')
<table class="updatebookstable">
	<tr>
		<td>ID</td>	
		<td>name</td>	
		<td>Year of Publish</td>	
		<td>Genre</td>	
		<td>Author</td>	
	</tr>
	<?php
foreach ($books as $book) {
	echo "<tr>";
	echo "<form action='' method='post'>";
	?>
	{{csrf_field()}}
	<?php
	echo "<td> <input type='text'  name ='id' size='2' value='$book->id' readonly/></td>";
	echo "<td>$book->name</td>";
	echo "<td>$book->publish_year</td>";
	echo "<td>$book->genre</td>";
	foreach($authors as $auth){
		if($book->author_id==$auth->id){
			$authorfio="$auth->name $auth->second_name $auth->last_name";
			echo "<td>$authorfio</td>";
	
	echo "<td><button type='submit' class='buttondeletebook'>Удалить</button></td>";
		}
	}
	echo "</form>";
	echo "</tr>";

}
?>

@stop