<?php
class Client {
    private $name;
    private $last_order;
    private $money;

    public function __construct($name, $money) {
        $this->name = $name;
        $this->last_order = null;
        $this->money = $money;
    }

    public function about_client() {
        return "Имя клиента: $this->name Последний заказ: " . ($this->last_order ? $this->last_order : 'Нет') . "nСумма денег: $this->money";
    }

    public function last_order($order) {
        $this->last_order = $order;
    }

    public function all_money($amount) {
        $this->money += $amount;
    }
}
?>
