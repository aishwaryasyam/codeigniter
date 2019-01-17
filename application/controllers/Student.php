<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
public $session = "";

        public function __construct()
        {
		parent::__construct();
              $this->load->model('student_model');
        }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                 //$this->load->library('mongo_db', array('activate'=>'newdb'),'mongo_db2');
		$data["students"] = $this->student_model->get_students();
		$this->load->view('student/list',$data);
	}

	public function add()
	{
		$data["title"] = "Add Student";
		$this->load->view('student/add',$data);
                //$this->load->view('student/add');
	}

	public function save()
        {
          if($this->input->post('id'))
           {
              $id=new MongoDB\BSON\ObjectId($this->input->post('id'));
              $this->mongo_db->where(array('_id'=>$id))->set(array('name'=>$this->input->post('name'),'age'=>$this->input->post('age')))->update('student');
              echo "Data Updated successfully";
            //  $this->load->view('student/list.php');
	   }
           else
           {

           $data = array('name'=>$this->input->post('name'),'age'=>$this->input->post('age'));
           $this->mongo_db->insert('student', $data);
           echo "Data inserted successfully";
           }
         }

        public function delete()
        {
	
            $id = new MongoDB\BSON\ObjectId($this->input->get('id'));
            $this->mongo_db->where(array('_id'=> $id))-> delete('student');
            echo "Data deleted successfully";
//$this->session->set_flashdata('message', 'Data deleted Successfully..');
//redirect('/student/');
        }
        public function edit()
	{
	    $id=new MongoDB\BSON\ObjectId($this->input->get('id'));
	    $student= $this->mongo_db->where(array('_id'=>$id))->find_one('student');
	    $data["student"] = $student[0];
            $data["title"] = "Edit Student";
	    $this->load->view('student/add',$data);
 	}
}                         

 
?>
