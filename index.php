<?php


trait A{
   public function test($message){
       echo $message;
   }
}

class B {
    use A;

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->test("Salam.{$this->name}");
    }
}

$b = new B("Mustafa");

