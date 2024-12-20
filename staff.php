<?php
require 'person.php';

class Staff extends Person {
    private $position;
    private $year_started;
    private $teaching_experience;
    private $salary;

    public function __construct($name, $age, $gender, $position, $year_started, $teaching_experience, $salary) {
        parent::__construct($name, $age, $gender);
        $this->position = $position;
        $this->year_started = $year_started;
        $this->teaching_experience = $teaching_experience;
        $this->salary = $salary;
    }

    public function get_info() {
        return parent::get_info() . "nДолжность: $this->positionnГод начала работы: $this->year_startednПедагогический стаж: $this->teaching_experiencenЗарплата: $this->salary";
    }

    public function change_position($new_position) {
        $this->position = $new_position;
    }

    public function change_salary($new_salary) {
        $this->salary = $new_salary;
    }
}
?>
