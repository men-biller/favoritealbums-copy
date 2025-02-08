<?php
    // allow error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // put your own values after the equals signs
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "favalbums";

    try {
        // connect to database
        $conn = mysqli_connect($server, $username, $password, $database);

        // check connection
        if (!$conn) {
            throw new Exception();
        }
    } catch (Exception $e) {
        // if connection fails, display error message
        echo "Error: Unable to connect to database. ";
        echo " Reason: " . $e->getMessage();
        echo ". mysqli_ error number: " . mysqli_connect_errno();
        exit; // don't execute any other code on the page
    }

?>
