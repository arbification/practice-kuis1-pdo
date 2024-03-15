<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$person1 = new Person("John", 25);
$person2 = new Person("Jane", 30);

echo $person1->introduce() . "<br>";
echo $person2->introduce() . "<br>";

echo "<hr>";
highlight_file(__FILE__);
?>