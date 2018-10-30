<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends MY_Controller {

    public function index()
    {
        if ($this->session->akses_level == 'Blocked') view_error('Error 404');

        $data = array(  'title'     => 'Halaman Dasbor',
                        'subtitle'  => 'Selamat datang, '.$this->session->full_name.'.',
                        'isi'       => 'admin/dashboard/beranda');
        $this->load->view('admin/index', $data);
    }
}
