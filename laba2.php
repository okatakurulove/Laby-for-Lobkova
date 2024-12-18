<?php
$my_info = [
    'first_name' => 'Артём',
    'last_name' => 'Фомин',
    'age' => 18
];

$friend_info = [
    'first_name' => 'Вадим',
    'last_name' => 'Борисов',
    'age' => 20
];

$my_age = $my_info['age'];
$friend_age = $friend_info['age'];

if ($my_age > $friend_age) {
    echo "Я старше: $my_age летn";
} elseif ($my_age < $friend_age) {
    echo "Мой друг старше: $friend_age летn";
} else {
    echo "Мы одного возраста: $my_age летn";
}

$name_length = strlen($my_info['first_name']);
$friend_name_length = strlen($friend_info['first_name']);

if ($name_length > $friend_name_length) {
    echo "Мое имя длиннее: '{$my_info['first_name']}' ($name_length символов)n";
} elseif ($name_length < $friend_name_length) {
    echo "Имя моего друга длиннее: '{$friend_info['first_name']}' ($friend_name_length символов)n";
} else {
    echo "Наши имена одинаковой длины: $name_length символовn";
}

$day = date('j');
$last_day_of_month = date('t');

$days_remaining = $last_day_of_month - $day;

echo "До конца месяца осталось $days_remaining дней.n";
?>
