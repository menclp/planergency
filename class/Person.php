<?php

class Person
{
  public $id;
  private $name;
  private $surname;
  private $dept;
  
  public function __construct($id, $name, $surname, $dept)
  {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
    $this->dept = $dept;
  }
  
}
