<?php

class MentorModel extends Dmodel{
    

   public function __construct(){

    parent::__construct();
    }

    public function mentorList($table) {

       $sql = "SELECT * FROM $table ORDER BY mentorId DESC";
       return $this->db->select($sql);
              
    }

    public function mentorById($table, $id){
        $sql = "SELECT * from $table where mentorId=:mentorId";
        $data = array(":mentorId" => $id);
        return $this->db->select($sql, $data);
    }

    public function insertMentor($table, $data){
        return $this->db->insert($table, $data);
    }
}

?>