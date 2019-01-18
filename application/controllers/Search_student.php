<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Search_student extends CI_Controller
{
    public function index()
    {

        $from_age = $this->input->get('from_age');
        $to_age = $this->input->get('to_age');
        $data = $this->mongo_db->where_between('age', $from_age, $to_age)->get('student');
        $this->send_response($data);

    }
    public function insert()
    {
        $name=$this->input->post('name');
        $age=$this->input->post('age');
        $data=$this->mongo_db->insert('student',['name'=>$name,'age'=>$age]);
        $this->send_response($data);
    }
    public function delete()
    {
        $id=$this->input->get("id");
        $data=$this->mongo_db->where(['_id'=>new MongoDB\BSON\ObjectID($id)])->delete('student');
        $this->send_response($data);
       // echo "Data deleted successfully";
    }
    public function update($id)
    {
        $name=$this->input->post('name');
        $age=$this->input->post('age');
        $data=$this->mongo_db->where(['_id'=>new MongoDB\BSON\ObjectID($id)])
              ->set(['name'=>$name,'age'=>$age])
              ->update('student');
        $this->send_response($data);      

    }
    public function find()
    {
       $data=$this->mongo_db->get('student');
       $this->send_response($data);
        
    }
    Public function findo()
    {
        $id=$this->input->get('id');
        $data=$this->mongo_db->where(['_id'=>new MongoDB\BSON\ObjectID($id)])->get('student');
        $this->send_response($data);
    }
    public function send_response($data)
    {
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data));
    }
}
?>

