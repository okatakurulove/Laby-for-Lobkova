<?php
require 'product.php';
require 'client.php';

$product = new Product("Телефон", "Смартфон с большим экраном", 599.99, "Китай");
echo "Информация о продукте: " . $product->about_product() . " ";

$product->new_information("Планшет", "Большой экран и высокая производительность", "США");
$product->new_cost(299.99);
echo "Обновленная информация о продукте: " . $product->about_product() . " ";

$client = new Client("Иван", 1000.00);
echo "Информация о клиенте: " . $client->about_client() . " ";

$client->last_order("Покупка нового телефона");
$client->all_money(500);
echo "Обновленная информация о клиенте: " . $client->about_client() . " ";
?>
