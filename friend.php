<?php
class Friend {
  private $id;
  private $givenName;
  private $surname;
  private $address;
  private $grade;

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }
}
?>
