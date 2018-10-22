<?php
  session_start();


  class user_authentication extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();

      //load Form Helper Library
      $this->load->helper('form');

      //load Form Validation Library
      $this->load->library('form_validation');

      //Load Session Library
      $this->load->library('session');

      //Load databases
      $this->load->model('login_database');
    }
    //Show Login page
    public function index(){
    $this->load->view('login_form')
    }

    public function user_login_process(){
      $this->form_validation->set_rules('username', 'username', 'trim|request|xss_clean');
      $this->form_validation->set_rules('password', 'password', 'trim|request|xss_clean');

      if ($this->form_validation->run() == FALSE) {
        if (isset($this->session->userdata['logged_in'])) {
          $this->load->view('admin_page');
        }else {
          $this->load->view('login');
        }
      }else {
        $data = array(
          'username' => $this->input->post('username'),
          'password' => $this->input->post('password')
        );
        $result = $this->login_database->login($data);
        if ($result == TRUE) {

          $username = $this->input->post('username');
          $result = $this->login_database->read_user_information($username);
          if ($result != false) {
            $session_data = array(
              'username' => $result[0]->user_name,
              // 'email' => $result[0]->user_email,
            );

            //Add user data in session_start$this
            $this->session->set_userdata('logged_in', $session_data);
            $this->load->view('admin_page');
          }
        }else {
          $data = array(
            'error_message' => 'Invalid Username or Password'
          );
          $this->load->view('login', $data);
        }
      }
    }

    //Logout From ADMIN
    public function logout(){

      //Removing Session databases
      $session_array = array(
        'username' => ''
      );
      $this->session->unset_userdata('logged_in', $session_array);
      $data['message_display'] = 'Successfully Logout';
      $this->load->view('login', $data);
    }
  }

 ?>
