<?php
require 'person.php';

class Student extends Person {
    private $group_number;
    private $year_of_admission;
    private $position_in_group;

    public function __construct($name, $age, $gender, $group_number, $year_of_admission, $position_in_group) {
        parent::__construct($name, $age, $gender);
        $this->group_number = $group_number;
        $this->year_of_admission = $year_of_admission;
        $this->position_in_group = $position_in_group;
    }

    public function get_info() {
        return parent::get_info() . "Номер группы: $this->group_numbernГод поступления: $this->year_of_admissionnДолжность в группе: $this->position_in_group";
    }

    public function transfer_to_group($new_group) {
        $this->group_number = $new_group;
    }

    public function change_position($new_position) {
        $this->position_in_group = $new_position;
    }
}
?>
