<?php
  class Users extends CI_Controller
  {
    // Load database
    public function __construct()
    {
        parent::__construct();
    }

    public function login(){
      $data['title'] = 'Sign In';

      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('users/login', $data);
      }else {
        //get username
        $username = $this->input->post('username');
        //Get and encrypt Password
        $password = md5($this->input->post('password'));

        //Login user
        $user_id = $this->user_model->login($username, $password);

        if ($user_id) {
          //create Session
          $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            // 'akses_level' => $akses_level,
            'logged_in' => true
          );

          $this->session->set_userdata($user_data);

          // if ($this->session->akses_level == ) {
          //   // code...
          // }
            //set Message
            $this->session->set_flashdata('user_loggedin', 'You are now Logged in');

            redirect('index');

        }else {
          $this->session->set_flashdata('login_failed', 'Login is Invalid');

          redirect('users/login');
        }
      }
    }

    public function logout(){
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('username');

      //set Message
      $this->session->set_flashdata('user_loggedout', 'You are now Logged out');

      redirect('users/login');

    }
  }


 ?>
