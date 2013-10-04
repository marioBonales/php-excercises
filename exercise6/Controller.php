<?php
include("Person.php");
class Controller{
    public function renderPage($page=null){
        if(!$page){
            $page = "list_persons";
        }
        $this->$page();
    }

    public function show(){
        $data = Person::fetch($_GET['id']);
        include("views/read.php");
    }

    public function list_persons(){
        $data = Person::fetchAll();
        include("views/list.php");
    }

    public function new_person(){
        include("views/update.php");
    }

    public function delete(){
        $person = Person::fetch($_GET['id']);
        $person->delete();
        $this->redirect("/?page=list_persons");
    }

    public function update(){
        if( $_POST['id'] ){
            $person = Person::fetch($_POST['id']);
        }else{
            $person = new Person($person_data);
        }
        $person->name = $_POST['name'];
        $person->last_name = $_POST['last_name'];
        $person->age = $_POST['age'];
        $person->telephone = $_POST['telephone'];
        $person->email = $_POST['email'];
        $person->save();
        $this->redirect("/?page=show&id={$person->id}");
    }

    public function edit(){
        $data = Person::fetch($_GET['id']);
        print_r($person);
        include("views/update.php");
    }

    private function redirect($url){
        header("Location: $url");
    }
}
