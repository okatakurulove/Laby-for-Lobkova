<?php
class person {
    protected $name;
    protected $age;
    protected $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function get_info() {
        return "Имя: $this->namenВозраст: $this->agenПол: $this->gender";
    }
}
?>
