<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // echo var_dump($username);
        // echo var_dump($password);
        // die();

        $user = $this->m_user->cek_login($username);

        $get_user = $user->num_rows();

        if ($get_user > 0) {
            $user = $user->row_array();

            if ($user['password'] == $password) {
                if ($user['id_user_level'] == 2) {

                    $this->session->set_userdata('logged_in', true);
                    $this->session->set_userdata('id_user', $user['id_user']);
                    $this->session->set_userdata('username', $user['username']);

                    $this->session->set_flashdata('success_login', 'success_login');
                    redirect('Dashboard/dashboard_user');
                } else {
                    $this->session->set_flashdata('loggin_err_no_access', 'Anda Tidak Memiliki Hak Akses !');
                    redirect('Auth/login');
                }
            } else {
                $this->session->set_flashdata('loggin_err_no_pass', 'Password Anda Salah !');
                redirect('Auth/login');
            }

        } else {
            $this->session->set_flashdata('loggin_err_no_user', 'Anda Belum Terdaftar, Silahkan Register !');
            redirect('Auth/login');
        }

    }

    public function proses_register()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $re_pass = $this->input->post('re_pass');
        $id_user = md5($username . $email . $pass . rand(1, 99999));
        $id_user_level = 2;

        // echo var_dump($username);
        // echo var_dump($email);
        // echo var_dump($pass);
        // echo var_dump($re_pass);
        // echo var_dump($id_user);
        // echo var_dump($id_user_level);
        // die();

        if ($pass == $re_pass) {

            $hasil = $this->m_user->register_user($id_user, $username, $email, $pass,
                $id_user_level);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_register', 'eror_register');
                redirect('Auth/register');

            } else {

                $this->session->set_flashdata('register', 'register');
                redirect('Auth/login');

            }

        } else {
            $this->session->set_flashdata('error_password', 'error_password');
            redirect('Auth/register');
        }
    }

    public function log_out()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
        $this->session->set_flashdata('success_log_out','success_log_out');
            redirect('Auth/login');
	}
}
