<?php
include './db.php';
include './blade-config.php';
// include './php.ini.ini';

$sql = "SELECT * FROM ROOMS";
$result = $conn->query($sql);

echo $blade->run('rooms', ["rooms" => $result->fetch_all(MYSQLI_ASSOC)]);

$conn->close();











// $connection = getConnection();
// $result = mysqli_query($connection, 'SELECT * FROM rooms');
// $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
// mysqli_free_result($result);
// mysqli_close($connection);

// echo $blade->run('rooms', ['rooms' => $rooms]);