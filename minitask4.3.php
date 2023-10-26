<?php

// Connect to server/database
$mysqli = mysqli_connect("localhost", "2222880", "Benlily1234!", "db2222880");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
	echo "Connected to the database successfully.";
}
$sql = "SELECT * FROM Film ORDER BY FilmName";
$results = mysqli_query($mysqli, $sql);?>

<table class="table table-striped">
<?php while($a_row = mysqli_fetch_assoc($results)):?>

	<tr>
		<td>
			<a href='minitask4.php?id=<?=$a_row['FilmName']?> '>
				<?=$a_row['FilmName']?>
			</a>
		</td>
	</tr>
	<?php endwhile;?>
</table>
