<?php
class Factory {
    protected $name;
    protected function __construct($name){
        $this->name = $name;

    }

    public static function build($name){
        return new self($name);
    }

    public function getName(){
        return $this->name;
    }

}
