<?php

/* Index Controller */
class IndexController extends Dcontroller{

    
    public function __construct(){
        parent::__construct();
    }
 
    public function Index(){
       $this->home();
    }

    public function home(){
        $this->load->view('home');
    }
}   
?>