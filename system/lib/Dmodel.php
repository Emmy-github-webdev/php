<?php
/* Main Model */
class Dmodel{
    protected $db = array();

    public function __construct(){
        $dsn = 'mysql:dbname=phpdb; host=localhost';
        $user = 'root';
        $pass = '';
        $this->db = new Database($dsn, $user, $pass);
       
    }
}
?>