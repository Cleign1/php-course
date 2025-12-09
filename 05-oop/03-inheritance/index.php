<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User {
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email);
  }

  public function getStatus()
  {
    echo $this->status;
  }

  public function login() {
    echo "admin $this->name Logged In";
  }
}

$admin1 = new Admin("Tom Smith", 'Tom@mail.com', 5);

echo $admin1->email . "<br>";

$admin1->login();
$admin1->getStatus();