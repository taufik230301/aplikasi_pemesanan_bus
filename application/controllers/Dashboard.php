<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function dashboard_user()
	{
		
		$data["total_pesanan"] = $this->m_pesanan->count_pesanan_by_id($this->session->userdata('id_user'));
        $this->load->view('user/dashboard', $data);
	}

}
