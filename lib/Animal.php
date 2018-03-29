<?php

abstract class Animal implements Sounding{

    public $type;
    public $breed;
    public $age;

    public function __construct($type, $breed, $age) {
	$this->type = $type;
	$this->breed = $breed;
	$this->age = $age;
    }

    public function __toString() {
	return 'Type: ' . $this->type . '</br>' . 'Breed: ' . $this->breed . '</br>' . 'Age: ' . $this->age . '</br>';
    }

    abstract public function voice();
}
