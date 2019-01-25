<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function loginUser()
    {
        $_SESSION = $this->session->flashdata('username');
        $this->load->view('user_view');
           
    }
    public function logoutUser()
    {
        $this->session->sess_destroy();
        
        redirect('Home,index');
        
    }
}






    //public function _ loginUser() 
   // {
    //    $this->load->model('Model_user');
    //    $query = $this->Model_user->checkLogin();
      //  $username = $query[0]->username;
//
  //      $listSession = array(
    //        'usernmae' => $username,
     //   );
        
       // $this->session->set_underdata($listSession);
        //$this->session->set_flashdata('success', 'you are logged in');

        
        //redirect('Home','Dashboard');
    //}
    //public function logoutUser()
    //{
        //unset($_SESSION);
      //  $this->session->sess_destroy();
        
        //redirect('Home/index');
        
    //}


/* End of file Login.php */


?>