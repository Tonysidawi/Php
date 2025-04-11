<?php
// classes

class User
{
    private $email;
    private $name;

    public function __construct($name, $email)
    {
        // $this->name = 'mabel';
        // $this->email = 'william@gmail.com';

        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        // echo 'user logged in';
        echo $this->name . " logged in";
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        }else{
            return "invalid name";
        }
    }
}

// $userOne = new User();

// $userOne -> login();

// echo $userOne -> name;
// echo $userOne -> email;

$userTwo = new User('Tony', 'maximus@gmail');
// echo $userTwo->name;
// echo $userTwo->email;

// $userTwo->login();
// echo $userTwo ->getName();
// echo $userTwo->setName(50);

echo $userTwo -> setName('mabel');

echo $userTwo -> getName();





