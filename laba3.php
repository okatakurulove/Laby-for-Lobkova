<?php

$me = ['name' => 'Артём', 'age' => 19];
$friend = ['name' => 'Вадим', 'age' => 20];
$pet = ['name' => 'Кокос', 'age' => 1]; 


function compareAges($me, $friend) {
    if ($me['age'] > $friend['age']) {
        return "Мой возраст больше, меня зовут " . $me['name'];
    } elseif ($me['age'] < $friend['age']) {
        return "Возраст друга больше, его зовут " . $friend['name'];
    } else {
        return "Мы ровесники!";
    }
}


echo compareAges($me, $friend) . "n";


$agesArray = [$me['age'], $friend['age'], $pet['age']];
sort($agesArray); 
echo "Возраст в порядке возрастания: " . implode(", ", $agesArray) . "n";

function checkPetNameLength($pet) {
    $nameLength = strlen($pet['name']);

    if ($nameLength < 4) {
        return "Имя питомца маленькое.";
    } elseif ($nameLength >= 5 && $nameLength <= 10) {
        return "Имя питомца среднее.";
    } else {
        return "Имя питомца длинное.";
    }
}


echo checkPetNameLength($pet) . "n";

function checkPetSizeByAge($pet) {
    if ($pet['age'] < 1) {
        return "Питомец маленький.";
    } else {
        return "Питомец большой.";
    }
}

echo checkPetSizeByAge($pet) . "n";

?>
