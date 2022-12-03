<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Pesanan extends CI_Controller {


	public function __construct()
    {
		parent::__construct();
        if ($this->session->userdata('logged_in')) {
           
            $this->load->model('m_pesanan');
        } else {
            $this->session->set_flashdata('error_no_session', 'error_no_session');
            redirect('Auth/login');
        }

    }

	public function form_pesanan_user()
	{
        $this->load->view('user/form_pesanan');
	}

}
