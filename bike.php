<?php
$natasha_bike = [
    'brand' => 'Giant',
    'price' => 25690, // в рублях
    'currency' => 'RUB',
    'color' => 'розовый',
    'country' => 'Россия',
];

$vitya_bike = [
    'brand' => 'TREK',
    'price' => 12000, // в долларах
    'currency' => 'USD',
    'color' => 'синий',
    'country' => 'Америка',
];

$sveta_bike = [
    'brand' => 'Merida',
    'price' => 15684, // в евро
    'currency' => 'EUR',
    'color' => 'зеленый',
    'country' => 'Германия',
];

$katya_bike = [
    'brand' => 'CUBE',
    'price' => 96300, // в рублях
    'currency' => 'RUB',
    'color' => 'черный',
    'country' => 'Россия',
];

function convert_to_rubles($bike) {
    switch ($bike['currency']) {
        case 'RUB':
            return $bike['price'];
        case 'USD':
            return $bike['price'] * 100;
        case 'EUR':
            return $bike['price'] * 110;
        default:
            return 0;
    }
}

$natasha_price = convert_to_rubles($natasha_bike);
$vitya_price = convert_to_rubles($vitya_bike);
$sveta_price = convert_to_rubles($sveta_bike);
$katya_price = convert_to_rubles($katya_bike);

$prices = [
    'Наташа' => $natasha_price,
    'Витя' => $vitya_price,
    'Света' => $sveta_price,
    'Катя' => $katya_price,
];

$winner = array_keys($prices, max($prices))[0];

echo "$winner получил килограмм конфет!";
?>
