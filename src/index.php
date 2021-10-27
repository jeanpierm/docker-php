<?php

class Person
{
  public function __construct(
    public string $name,
    public string $surname,
    public int $age,
  ) {
  }
}

$person = new Person("Jeanpier", "Mendoza", 22);

echo json_encode($person);
