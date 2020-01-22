<?php
/*
*	Getting the different speeds of the ball
*	from the database
*/

require "get_db_handle_path.php";
require GET_DB_HANDLE_PATH."/get_db_handle.php";

    $conn = get_db_handle();

	 $sql_query =
        "SELECT ball_speed FROM game";

    $result = $conn -> query($sql_query);

    echo json_encode($result->fetchAll(PDO::FETCH_COLUMN));

    // close the connection
    $conn = null;

?>
