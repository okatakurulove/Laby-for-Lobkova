<?php
require 'student.php';
require 'staff.php';

$student = new Student("Алексей", 20, "Мужской", "101", 2022, "Председатель группы");
echo "Информация о студенте: " . $student->get_info() . " ";

$student->transfer_to_group("102");
$student->change_position("Секретарь группы");
echo "Обновленная информация о студенте: " . $student->get_info() . " ";

$staff = new Staff("Мария", 35, "Женский", "Преподаватель", 2015, 10, 60000);
echo "Информация о сотруднике: " . $staff->get_info() . " ";

$staff->change_position("Зав. кафедрой");
$staff->change_salary(80000);
echo "Обновленная информация о сотруднике: " . $staff->get_info() . " ";
?>
