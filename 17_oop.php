<?php

// oop 

class User {
    // properties are attributes that belong to a class
    // access modifiers = public, private, protected
    public $name;
    public $email;
    public $password;

    // a constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo 'constructor ran';
    }

    // method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// instantiate a user object

// $user1 = new User();

// no method used
// $user1->name = 'Brad';
// echo $user1->name;

// with method
// $user1->set_name('Brad');
// echo $user1->get_name();
// var_dump($user1);

// with constructor
$user2 = new User('John', 'gmail', 'pw');
var_dump($user2);


// inheritance
class Employee extends User {
    public $title;
    
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'gmail', 'pw', 'manager');


echo $employee1->get_title();