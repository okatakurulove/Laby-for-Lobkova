<?php
$my_info = [
    "name" => "Артём",
    "surname" => "Фомин",
    "age" => 18
];


$friend_info = [
    "name" => "Вадим",
    "surname" => "Борисов",
    "age" => 19
];


$my_age = $my_info["age"];
$friend_age = $friend_info["age"];

echo "Мой возраст: " . $my_age . " лет.\n";
echo "Возраст моего друга: " . $friend_age . " лет.";
?>
