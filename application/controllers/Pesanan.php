<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

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

    public function riwayat_pesanan()
    {

        $data['pesanan'] = $this->m_pesanan->read_all_pesanan($this->session->userdata('id_user'))->result_array();
        $this->load->view('user/riwayat_pesanan', $data);
    }

    public function pesan_tiket()
    {
        $tujuan = $this->input->post("tujuan");
        $asal = $this->input->post("asal");
        $tanggal_berangkat = $this->input->post("tanggal_berangkat");
        $waktu_berangkat = $this->input->post("waktu_berangkat");
        $nama_bus = $this->input->post("nama_bus");
        $nomor_kursi = $this->input->post("nomor_kursi");
        $nama_lengkap = $this->input->post("nama_lengkap");
        $tanggal_lahir = $this->input->post("tanggal_lahir");
        $usia = $this->input->post("usia");
        $email = $this->input->post("email");
        $jenis_kelamin = $this->input->post("jenis_kelamin");
        $nomor_telepon = $this->input->post("nomor_telepon");
        $metode_pembayaran = $this->input->post("metode_pembayaran");


        $kode_pembayaran = substr(md5($nama_bus . rand(1, 99999)), -6);

        $hasil = $this->m_pesanan->create_pesanan($waktu_berangkat, $kode_pembayaran, $tujuan, $asal, $tanggal_berangkat, $nama_bus,
            $nomor_kursi, $nama_lengkap, $tanggal_lahir, $usia, $email, $jenis_kelamin, $nomor_telepon, $metode_pembayaran, $this->session->userdata('id_user'));

        if ($hasil == false) {
            $this->session->set_flashdata('eror_pesan', 'eror_pesan');
            redirect('Pesanan/riwayat_pesanan');

        } else {

       
            if($metode_pembayaran = "Cash"){

                $this->session->set_flashdata('pesanan_cash', "Silahkan Lakukan Pembayar, dengan kode $kode_pembayaran di outlet kami !" );
                redirect('Pesanan/riwayat_pesanan');
              
            }else{
                $this->session->set_flashdata('pesanan', 'pesanan');
                redirect('Pesanan/riwayat_pesanan');
                
            }


        }

    }

    public function hapus_pesanan()
    {

        $id_pesanan = $this->input->post("id_pesanan");

        $hasil = $this->m_pesanan->delete_pesanan($id_pesanan);

        if ($hasil == false) {
            $this->session->set_flashdata('eror_hapus_pesan', 'eror_hapus_pesan');
            redirect('Pesanan/riwayat_pesanan');

        } else {

            $this->session->set_flashdata('hapus_pesan', 'hapus_pesan');
            redirect('Pesanan/riwayat_pesanan');

        }
    }

}