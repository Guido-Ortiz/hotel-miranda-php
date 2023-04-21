<?php
include './blade-config.php';
include './db.php';

$connection = getConnection();
$result = mysqli_query($connection, 'SELECT * FROM rooms');
$rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($connection);

echo $blade->run('rooms', ['rooms' => $rooms]);