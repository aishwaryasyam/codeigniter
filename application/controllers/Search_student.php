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

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200) // Return status
            ->set_output(json_encode($data));

    }
}
