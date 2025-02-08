<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['fav_album']) && isset($_POST['fav_artist']) && isset($_POST['fav_genre']) && isset($_POST['worst_album']) && isset($_POST['worst_artist']) && isset($_POST['worst_genre'])) {

    // sanitizeMySQL() is a custom function, written below
    $fav_album = sanitizeMySQL($conn, $_POST['fav_album']);
    $fav_artist = sanitizeMySQL($conn, $_POST['fav_artist']);
    $fav_genre = sanitizeMySQL($conn, $_POST['fav_genre']);
    $worst_album = sanitizeMySQL($conn, $_POST['worst_album']);
    $worst_artist = sanitizeMySQL($conn, $_POST['worst_artist']);
    $worst_genre = sanitizeMySQL($conn, $_POST['worst_genre']);

    // create a PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());

    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO albums (fav_album, fav_artist, fav_genre, worst_album, worst_artist, worst_genre, updated)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssssss' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssssss',
        $fav_album,
        $fav_artist,
        $fav_genre,
        $worst_album,
        $worst_artist,
        $worst_genre,
        $date
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
    echo "New record for " . $fav_album . " entered successfully.";
} else {
    echo "Failed to enter new record!";
} // end of isset if-statement

?>
