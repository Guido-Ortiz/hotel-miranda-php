<?php
include './blade-config.php';
include './db.php';

$sql = "SELECT * FROM ROOMS";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_object()){
        $rooms[] = $row;
    }
} else {
    echo "No results";
}

$conn->close();
echo $blade->run('rooms', array('rooms' => $rooms));











// $connection = getConnection();
// $result = mysqli_query($connection, 'SELECT * FROM rooms');
// $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
// mysqli_free_result($result);
// mysqli_close($connection);

// echo $blade->run('rooms', ['rooms' => $rooms]);