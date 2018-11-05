<?php
    class Pages extends CI_Controller
    {
      // public function view($page = 'index'){
      //   if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
      //     show_404();
      //   }
      //   $data['title'] = ucfirst($page);
      //   $this->load->view($page, $data );
      // }

      public function view(){
        $this->load->view('admin/pages/index');
      }
    }
 ?>
