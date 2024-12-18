<?php
$data = file_get_contents('our.txt');
$lines = explode("n", trim($data));

$me = explode(", ", $lines[0]); 
$friend = explode(", ", $lines[1]);

function getAge($person) {
    return (int)$person[3];
}

function getHairColor($person) {
    return $person[4];
}

function getEyeColor($person) {
    return $person[5];
}

$myAge = getAge($me);
$friendAge = getAge($friend);
$olderAge = max($myAge, $friendAge);
$youngerAge = min($myAge, $friendAge);

$sameEyeColor = getEyeColor($me) === getEyeColor($friend);
$sameHairColor = getHairColor($me) === getHairColor($friend);

$ageDifference = $olderAge - $youngerAge;

$result = "Ваши данные:";
$result .= "Имя: {$me[1]} {$me[2]}, Возраст: $myAge, Цвет волос: " . getHairColor($me) . ", Цвет глаз: " . getEyeColor($me) . "nn";
$result .= "Данные друга:";
$result .= "Имя: {$friend[1]} {$friend[2]}, Возраст: $friendAge, Цвет волос: " . getHairColor($friend) . ", Цвет глаз: " . getEyeColor($friend) . "nn";

$result .= "Наибольший возраст: $olderAgen";


if ($sameEyeColor) {
    $result .= "У вас с другом одинаковый цвет глаз.n";
} else {
    $result .= "Цвет глаз разный.n";
}

if ($sameHairColor) {
    $result .= "У вас с другом одинаковый цвет волос.n";
} else {
    $result .= "Цвет волос разный.n";
}

$result .= "Младшему из вас недостает $ageDifference лет до старшего.n";

file_put_contents('result.txt', $result);

echo "Результат записан в файл result.txt";
?>
