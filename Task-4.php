<?php

class Animal {
    public function makeSound() {
        echo "The animal makes sound.\n";
    }
}
// Child classes inheriting from Animal
class Bird extends Animal {
    //Override the Method make sound
    public function  makeSound() {
        echo"The bird chirps.\n";
    }
}

 class Cat extends Animal {
    //Override the Method make sound
    public function makeSound() {
        echo "The cat meows.\n";
    }
 }
class Dog extends Animal {
    // Implementation specific to dogs
    public function makeSound() {
        echo "The Dog Ghew Ghew.\n";
    }
}

//make object class Animal, Bird, Cat, Dog
    $animal = new Animal();
    $bird = new Bird();
    $cat = new Cat();
    $dog = new Dog();
    
   // Output: The animal makes a sound.  
    $animal->makeSound();
    $bird->makeSound();
    $cat->makeSound();
    $dog->makeSound();
    
?>