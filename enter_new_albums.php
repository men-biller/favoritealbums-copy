<?php
include 'database.php'; // Ensure connection to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $fav_album = mysqli_real_escape_string($conn, $_POST['fav_album']);
    $fav_artist = mysqli_real_escape_string($conn, $_POST['fav_artist']);
    $fav_genre = mysqli_real_escape_string($conn, $_POST['fav_genre']);
    $worst_album = mysqli_real_escape_string($conn, $_POST['worst_album']);
    $worst_artist = mysqli_real_escape_string($conn, $_POST['worst_artist']);
    $worst_genre = mysqli_real_escape_string($conn, $_POST['worst_genre']);

    // Insert into database
    $query = "INSERT INTO albums (fav_album, fav_artist, fav_genre, worst_album, worst_artist, worst_genre)
              VALUES ('$fav_album', '$fav_artist', '$fav_genre', '$worst_album', '$worst_artist', '$worst_genre')";

    if (mysqli_query($conn, $query)) {
        echo "<p>Album added successfully!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Album Entry Form</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/form.css">
</head>

<body>
<div id="container">

<h1>Add New Albums!</h1>

<p class="middle"><a href="album_list.php">View Full Album List!</a></p>

<!-- The form to enter album details -->
<form id="albumform" method="post" action="enter_new_albums.php" autocomplete="off">

  <label for="fav_album">Favorite Album Name</label>
  <input type="text" name="fav_album" id="fav_album" maxlength="100" required>

  <label for="fav_artist">Artist</label>
  <input type="text" name="fav_artist" id="fav_artist" maxlength="100" required>

  <label for="fav_genre">Genre</label>
  <input type="text" name="fav_genre" id="fav_genre" maxlength="50" required>

  <label for="worst_album">Worst Album Name</label>
  <input type="text" name="worst_album" id="worst_album" maxlength="100" required>

  <label for="worst_artist">Artist</label>
  <input type="text" name="worst_artist" id="worst_artist" maxlength="100" required>

  <label for="worst_genre">Genre</label>
  <input type="text" name="worst_genre" id="worst_genre" maxlength="50" required>

  <input type="submit" value="Submit Album">

</form>

</div> <!-- close container -->
</body>
</html>