<?php
	require 'get_db_handle_path.php';
	require GET_DB_HANDLE_PATH."/get_db_handle.php";

    $conn = get_db_handle();

//prepared statement
    $stmt = $conn ->
       prepare("insert into game (highscore) ".
               "values (:hscore,)");
    $stmt -> bindParam(':hscore', $_POST['sendScore']);

    $stmt -> execute();

    // remove all references to the connection
    $stmt = null;
    $conn = null;
?>
