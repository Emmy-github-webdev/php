<?php

class MentorController extends Dcontroller {
    function __construct() {
        parent::__construct();
    }

    public function mentor(){
        $data = array();
        $table = 'mentors';
        $mentorModel = $this->load->model('MentorModel');
        $data['mentor'] =$mentorModel -> mentorList($table);
        $this->load->view("mentor", $data);
    }

    public function mentorById(){
        $data = array();
        $table = 'mentors';
        $id = 1;
        $mentorModel = $this->load->model('MentorModel');
        $data['mentorbyid'] =$mentorModel -> mentorById($table, $id);
        $this->load->view("mentorbyid", $data);
    }


    public function addMentor(){
        $this->load->view("addMentor");
    }
  
    public function signupMentor(){
        $table = 'mentors';
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $description = $_POST['description'];
        $expertise = $_POST['expertise'];
  
        $data = array(
           'firstName' => $firstName,
           'lastName' => $lastName,
           'email' => $email,
           'password' => $password,
           'phoneNumber' => $phoneNumber,
           'description' => $description,
           'expertise' => $expertise
        );
        $mentorModel = $this->load->model('MentorModel');
        $mentorModel->insertMentor($table, $data);

        $url = BASE_URL."/MentorController/mentor";
        header("Location:$url");
        
        /* $mdata = array();
  
        if ($result == 1) {
           $mdata ['msg'] = 'Mentor signed up Successfully ...';
        }else {
           $mdata ['msg'] = "Mentor Not Added ...";
        }
  
        $this->load->view("addMentor", $mdata);
   */
     }

    /* public function addMentor(){
        $this->load->view('addMentor');
        }

    public function mentorSignup(){
        $table = 'mentors';
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phoneNumber=$_POST['phoneNumber'];
        $description=$_POST['description'];
        $expertise=$_POST['expertise'];

        $count=$this->model->check_mentor($email);
        if($count >0){
            echo 'This Mentor already exist';
        }
        else {
            $data = array(
                'firstName' =>$firstName,
                'lastName' =>$lastName,
                'email' =>$email,
                'password' =>$password,
                'phoneNumber' =>$phoneNumber,
                'description' =>$description,
                'expertise' =>$expertise
            );

            $MentorModel = $this->load->model('MentorModel');
            $result = $MentorModel->insertMentor($table, $data);

        }
    } */

    
}
?>