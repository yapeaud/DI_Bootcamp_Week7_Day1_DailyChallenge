<?php
 
 class User{
    public $firstName;

    public function hello(){
        return "Hello, " . $this->firstName;
    }
 }

 $object = new User();
 $object->firstName ='Jonnie';
 echo $object->hello();