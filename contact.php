<?php
include './blade-config.php';
include './db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "comment" => $_POST["comment"],
        // "stars" => rand(1, 5),
        // "archived" => rand(0,1)
    ];

    $sql = "INSERT INTO reviews(name, email, phone, comment) VALUES ('".$contact["name"]."', '".$contact["email"]."', '".$contact["phone"]."', '".$contact["comment"]."');";

    $conn->query($sql);

    $conn->close();
}
echo $blade->run('contact');