<?php 
class admin{
    protected $db;
    private static $ADMIN;
    private static $PASS; 

    private function __construct(){
        $this->ADMIN="admin";
        $this->PASS="123";
    }

    public static function createSingleton(){
        $A = new admin;
        $A->__construct();
        return $A;
    }
    public function getADMIN() {
        return self::$ADMIN;
    }
    public function getPASS() {
        return self::$PASS;
    }
    
}
?>