<?php
/* Main Model */
class Dmodel{
    protected $db = array();

    public function __construct(){
        $dsn = 'mysql:dbname=heroku_bdb11af8fb71ac4; host=us-cdbr-east-02.cleardb.com';
        $user = 'bfedf18c81d695';
        $pass = 'e98d41bf';
        $this->db = new Database($dsn, $user, $pass);
       
    }
}
?>