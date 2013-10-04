<?php
include("Person.php");
class Controller{
    public function renderPage($page=null){
        if(!$page){
            $page = "error";
        }
        $this->$page();
    }

    public function show(){
        $data = Person::fetch($_GET['id']);
        include("views/read.php");
    }

    public function error(){
    }

    public function new_person(){
    }

    public function create(){
    }

    public function delete(){
    }

    public function update(){
    }

    public function edit(){
    }
}
