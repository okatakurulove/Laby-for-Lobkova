<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'bolnicalaba4');

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($mysql->connect_errno) exit('Ошибка подключения');
$mysql->set_charset('utf8');
$mysql->close();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $dob = $_POST['dob'];
    $snils = $_POST['snils'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    echo "Запись на прием к врачу успешно завершена!<br>";
    echo "Имя: $name<br>";
    echo "Фамилия: $surname<br>";
    echo "Отчество: $patronymic<br>";
    echo "Дата рождения: $dob<br>";
    echo "СНИЛС: $snils<br>";
    echo "Место проживания: $address<br>";
    echo "Номер телефона: $phone<br>";
} else {
    echo "Ошибка: некорректный запрос.";
}
?>
