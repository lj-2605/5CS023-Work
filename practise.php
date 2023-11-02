<?php


$mysqli = mysqli_connect("localhost", "2222880", "Benlily1234!", "db2222880");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
	echo "Connected to the database successfully.";
}
$sql = "SELECT * FROM Film ORDER BY FilmName";
$results = mysqli_query($mysqli, $sql);?>

<table border = 1 class="table table-striped">


	<tr> 
		<th> Film Name </th> <! this makes table headers >
		<th> Film Duration </th>
		<th> Film Genre </th>
	</tr>
	<?php while($a_row = mysqli_fetch_assoc($results)):?>
	<tr>
	
		<td><!This is each column of the table>
			<a href='minitask4.php?id=<?=$a_row['FilmName']?> '> <!This makes it a link but isnt needed>
				<?=$a_row['FilmName']?> <!This adds the text to the table>
			</a>
		</td>
		<td> <?=$a_row['FilmDuration']?> </td>
		<td> <?=$a_row['FilmGenre']?> </td>
	</tr>
	<?php endwhile;?>
</table>
