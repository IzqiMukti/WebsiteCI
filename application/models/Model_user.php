<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {    
    public function insertUser()
    {
        //insert data
        $data = array(
            'username' => $this->input->post('username'),
            'fname' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'nis' => $this->input->post('nis'),
            'password' => sha1($this->input->post('password')),
        );
        //insert data to the database
        $this->db->insert('users', $data);
    }

    public function checkLogin()
    {
     $username = $this->input->post('username', TRUE);
     $password = $this->input->post('password', TRUE);

     $this->db->where('username', $username);
     $this->db->where('password', $password);
     $result = $this->get('user');

     if ($result->num_row() == 1)
     {
         return $result->result();
     }
     else
     {
         return false;
     }
    }
    
}

/* End of file ModelName.php */

?>