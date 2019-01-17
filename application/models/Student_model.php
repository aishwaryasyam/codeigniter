<?php
class Student_model extends CI_Model {

        public function __construct()
        {
               
        }
	
	public function get_students(){
		$students = $this->mongo_db->get('student');
		return $students;
	}

}
