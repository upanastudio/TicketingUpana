<?php
defined('BASEPATH') OR exit('No direct script access allowed');defined('BASEPATH') OR exit('No direct script access allowed');

class issues extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function openissues(){
    $this->load->view('templates/header');
    $this->load->view('admin/pages/OpenIssue');
  }

  public function closeissues(){
    $this->load->view('templates/header');
    $this->load->view('admin/pages/CloseIssue');
  }

  public function totalissues(){
    $this->load->view('admin/pages/client');
  }

}

 ?>
