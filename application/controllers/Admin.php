<?php
  class Admin extends CI_Controller
  {
      public function admin($page = 'index'){
        if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
          show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('admin/'.$page, $data);
      }
  }


 ?>
