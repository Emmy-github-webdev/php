<?php

class MenteeModel extends Dmodel{
    

    public function __construct(){
 
     parent::__construct();
    }

    public function getAllMentee($table) {

        $sql = "SELECT * FROM $table ORDER BY menteeId DESC";
        return $this->db->select($sql);
               
    }

    public function getmonteebyid($tableMentee, $tableMentor, $menteeId){
        $sql = "SELECT $tableMentee.*, $tableMentor.firstName from $tableMentee
        INNER JOIN $tableMentor
        on $tableMentee.mentor = $tableMentor.mentorId
        WHERE $tableMentee.menteeId = $menteeId";
        return $this->db->select($sql);  
      }

    public function insertMentee($table, $data){
        return $this->db->insert($table, $data);
    }
    
}     
?>