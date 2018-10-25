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
	echo "<td>$book->id</td>";
	echo "<td>$book->name</td>";
	echo "<td>$book->publish_year</td>";
	echo "<td>$book->genre</td>";
	foreach($authors as $auth){
		if($book->author_id==$auth->id){
			$authorfio="$auth->name $auth->second_name $auth->last_name";
			echo "<td>$authorfio</td>";
	
	echo "<td><button class='buttonupdatebooks' data-id='$book->id' data-name='$book->name' data-publish='$book->publish_year' data-genre='$book->genre' data-auth='$authorfio'>Изменить</button></td>";
		}
	}
	echo "</tr>";

}
?>
</table>
<form action="" method="post">
	 {{csrf_field()}}
        ID:
        <input type="text" class="id"  name ="id" size="2" readonly/>
        Name:
        <input type="text" class="name" name="name"  size="27"/>
        Year:
        <input type="text" class="year" name="year"  size="27"/>
        Genre:
        <input type="text" class="genre" name="genre"  size="27"/>
        <p></p>
        Author:
          <select class="author" name="author">
            <?php
        
                foreach ($authors as $auth) {
                	$authorfio="$auth->name $auth->second_name $auth->last_name";
                       echo "<option>$authorfio</option>";
                }
            ?>
            </select>
        <input type ="submit" value="Сохранить" name="updatebookssave" class="updatebookssave"/>

@stop