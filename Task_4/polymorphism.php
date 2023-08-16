<?php

class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}


$animals = [new Dog(), new Cat(), new Cow()];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . PHP_EOL;
}


?>