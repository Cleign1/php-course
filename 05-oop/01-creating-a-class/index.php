<?php

class User {

    // properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // methods
    public function login() {
        echo "The user $this->name has Logged In <br>";
    }
}

$user1 = new User('John Doe', 'john@mail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@mail.com');

$user2->login();
// var_dump($user2);