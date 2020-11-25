<?php

class MenteeController extends Dcontroller {
    function __construct() {
        parent::__construct();
    }

    public function mentee(){
        $data = array();
        $table = 'mentees';
        $menteeModel = $this->load->model('MenteeModel');
        $data['mentee'] =$menteeModel -> getAllMentee($table);
        $this->load->view("mentee", $data);
    }

    public function menteeDetail($menteeId){
      $data = array();
        $tableMentee = 'mentees';
        $tableMentor = 'mentors';
        $menteeModel = $this->load->model('MenteeModel');
        //$data['mentor'] =$mentorModel -> mentorList($tableMentor);
        $data['menteebyid'] = $menteeModel->getmonteebyid($tableMentee, $tableMentor, $menteeId);  
        $this->load->view("menteeDetail", $data);   
    
    }


    public function addMentee(){
        $tablementor = 'mentors';
        $mentorModel = $this->load->model('MentorModel');
        $data['mentor'] =$mentorModel -> mentorList($tablementor);
        $this->load->view("addMentee", $data);        
  
    }
  
    public function signupMentee(){
        $table = 'mentees';
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $description = $_POST['description'];
        $mentor = $_POST['mentor'];
  
        $data = array(
           'firstName' => $firstName,
           'lastName' => $lastName,
           'email' => $email,
           'password' => $password,
           'description' => $description,
           'mentor' => $mentor
        );
        $menteeModel = $this->load->model('MenteeModel');
        $menteeModel->insertMentee($table, $data);
        
        $url = BASE_URL."/MenteeController/mentee";
        header("Location:$url");
    }


    public function menteeByMentor(){

    }
}

?>