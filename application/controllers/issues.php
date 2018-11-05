<?php
defined('BASEPATH') OR exit('No direct script access allowed');defined('BASEPATH') OR exit('No direct script access allowed');

class issues extends CI_Controller
{

  function __construct(argument)
  {
    parent::__construct();
  }

  public function OpenIssiues(){
    $this->load->view('admin/pages/OpenIssue');
  }

  public function OpenIssiues(){
    $this->load->view('admin/pages/CloseIssue');
  }

}

 ?>
