<?php class Module 
{
    private $id;
    private $name;
    private $venue;
    private $students = [];

    function __get($name) {
        return $this->$name;
    }
    function __set($name,$value) {
        $this->$name = $value;
    }
    function addStudent($students) {
        $this->students[] = $students;
    }
}
?>