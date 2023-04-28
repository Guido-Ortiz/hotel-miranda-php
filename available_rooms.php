<?php
include "./db.php";
include './blade-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $checkin = explode("-", $_POST["checkin"]);
    $checkout = explode("-", $_POST["checkout"]);

    $checkin = $checkin[2] . "-" . $checkin[1] . "-" . $checkin[0];
    $checkout = $checkout[2] . "-" . $checkout[1] . "-" . $checkout[0];

    $sql = "SELECT * FROM bookings WHERE ((bookings.checkin < '".$checkin."' AND bookings.checkout > '".$checkin."') OR (bookings.checkin > '".$checkin."' AND bookings.checkout < '".$checkout."') OR (bookings.checkin < '".$checkout."' AND bookings.checkout > '".$checkout."') OR (bookings.checkin < '".$checkin."' AND bookings.checkout > '".$checkout."'));";

    $result = $conn->query($sql);
    
    print_r($result->fetch_all());

    $conn->close();
} else {
    $sql = "SELECT * FROM rooms;";
    $result = $conn->query($sql);

    echo $blade->run("index", ["rooms" => $result->fetch_all(MYSQLI_ASSOC)]);

    $conn->close();
}