<?php
	include 'database.php';
	$query = "SELECT * FROM albums ORDER BY fav_album";
	$albums = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Album List</title>
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
<div id="container">

<h1>Album List</h1>

<p class="middle"><a href="enter_new_albums.php">Add new album entries!</a></p>

<p class="middle">Below is the list of all submitted albums:</p>

<!-- Form to display albums in a table -->
<form class="smallform" method="post" action="albums_edit.php" autocomplete="off">
	
<table class="album-table">
	<!-- Table column headings -->
	<tr>
	  <th>Favorite Album Name</th>
	  <th>Artist</th>
	  <th>Genre</th>
	  <th>Worst Album Name</th>
	  <th>Artist</th>
	  <th>Genre</th>
	</tr>

<!-- PHP while-loop to display database query results -->
<?php while ($row = mysqli_fetch_assoc($albums)) :  ?>

<tr>
  <td><?php echo htmlspecialchars($row['fav_album']); ?></td>
  <td><?php echo htmlspecialchars($row['fav_artist']); ?></td>
  <td><?php echo htmlspecialchars($row['fav_genre']); ?></td>
  <td><?php echo htmlspecialchars($row['worst_album']); ?></td>
  <td><?php echo htmlspecialchars($row['worst_artist']); ?></td>
  <td><?php echo htmlspecialchars($row['worst_genre']); ?></td>
</tr>

<?php endwhile; ?>
<!-- End PHP while-loop -->

</table>

</form>

<p class="middle"><a href="index.html">Return to main page!</a></p>

</div> <!-- close container -->
</body>
</html>
