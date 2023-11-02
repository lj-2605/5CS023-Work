<?php


$mysqli = mysqli_connect("localhost", "2222880", "Benlily1234!", "db2222880");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
	echo "Connected to the database successfully.";
}
$sql = "SELECT * FROM videogames ORDER BY DateOfRelease";
$results = mysqli_query($mysqli, $sql);?>
<h1> List of Videogames </h1>
<table border = 1 class="table table-striped">


	<tr> 
		<th> Game Name </th> 
		<th> Genre </th>
		<th> Price </th>
		<th> Date of release </th>
	</tr>
	<?php while($a_row = mysqli_fetch_assoc($results)):?>
	<tr>
	
		<td> <?=$a_row['Game_name']?> </td>
		<td> <?=$a_row['Genre']?> </td>
		<td> £<?=$a_row['Price']?> </td>
		<td> <?=$a_row['DateOfRelease']?>
	</tr>
	<?php endwhile;?>
</table>
