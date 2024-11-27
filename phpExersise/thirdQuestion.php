<?php
class Person{

    public $name;

    public $age;

    public function displayInfo() {

        echo "名前:".$this->name.",年齢:".$this->age;
    }
    
}

    $person = new Person;
    $person->name = "John";
    $person->age =  25;
    $person->displayInfo();



    $person = new Person;











?>