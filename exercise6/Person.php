<?
class Person {
    public $id, $name, $last_name,$age, $email, $telephone;
    protected $db;

    public function __construct($data,$db=null){
        if($db == null){
            $this->db = new PDO('mysql:host=localhost;dbname=exercise;','exercise','exercise9');
        }else{
            $this->db = $db;
        }
        if(isset($data['id'])){
            $this->id = $data['id'];
        }
        $this->name = $data['name'];
        $this->last_name = $data['last_name'];
        $this->age = $data['age'];
        $this->email = $data['email'];
        $this->telephone = $data['telephone'];
    }

    public static function fetchAll($db=null){
        if($db == null){
            $db = new PDO('mysql:host=localhost;dbname=exercise;','exercise','exercise9');
        }
        $statement = $db->prepare("SELECT * FROM person");
        $statement->execute();
        $data_persons = $statement->fetchAll();
        $persons = array();
        foreach($data_persons as $person){
            $persons[] = new Person($person);
        }
        return $persons;
    }
    public static function fetch($id,$db=null){
        if($db == null){
            $db = new PDO('mysql:host=localhost;dbname=exercise;','exercise','exercise9');
        }
        $statement = $db->prepare("SELECT * FROM person WHERE id= :id LIMIT 1");
        $statement->bindParam(":id",$id);
        $statement->execute();
        if( $person_data = $statement->fetch()){
            return new Person($person_data,$db);
        }
        return null;

    }

    public function save(){
        if(!$this->id){
            $statement = $this->db->prepare(<<<SQL
            INSERT INTO person (name, last_name, age, email, telephone)
            VALUES (:name, :last_name,:age,:email, :telephone)
SQL
            );
        }else{
            $statement = $this->db->prepare(<<<SQL
            UPDATE person set name = :name, last_name = :last_name, age = :age,
            email = :email, telephone = :telephone
            WHERE id = :id
SQL
            );
            $statement->bindParam(":id", $this->id);
        }
            $statement->bindParam(":name", $this->name);
            $statement->bindParam(":last_name",$this->last_name);
            $statement->bindParam(":age", $this->age);
            $statement->bindParam(":email", $this->email);
            $statement->bindParam(":telephone", $this->telephone);
            $statement->execute();
            if(!$this->id && $success = $statement->errorCode() == 0){
                $this->id = $this->db->lastInsertId();
            }
            return $success;
    }

    public function delete(){
        if(!$this->id){
            return;
        }
        $statement = $this->db->prepare("DELETE FROM person WHERE id = :id ");
        $statement->bindParam(":id",$this->id);
        $statement->execute();
        $this->id = null;
    }

}
