<?
class Singleton{
    protected static $instance = null;
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getData(){
        return "Data";
    }

    protected function __construct(){
    }
}
