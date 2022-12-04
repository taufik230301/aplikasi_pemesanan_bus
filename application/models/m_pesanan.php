<?php

class M_pesanan extends CI_Model
{

    public function read_all_pesanan($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM pesanan WHERE id_user='$id_user'");
        return $hasil;
    }

    public function count_pesanan_by_id($id_user)
    {

        $hasil = $this->db->query("SELECT * FROM pesanan WHERE id_user='$id_user'");
        return $hasil->num_rows();

    }

    public function create_pesanan($waktu_berangkat, $kode_pembayaran,$tujuan, $asal, $tanggal_berangkat, $nama_bus,
        $nomor_kursi, $nama_lengkap, $tanggal_lahir, $usia, $email, $jenis_kelamin, $nomor_telepon, $metode_pembayaran, $id_user) {
        $this->db->trans_start();

        $this->db->query("INSERT INTO pesanan(waktu_berangkat, kode_pembayaran, tujuan, asal, tanggal_berangkat, nama_bus, nomor_kursi, nama_lengkap, tanggal_lahir,
        usia, email, jenis_kelamin, nomor_telepon , metode_pembayaran, id_user, tanggal_pesan)
       VALUES ('$waktu_berangkat', '$kode_pembayaran','$tujuan','$asal', '$tanggal_berangkat', '$nama_bus', '$nomor_kursi', '$nama_lengkap', '$tanggal_lahir',
       '$usia', '$email', '$jenis_kelamin', '$nomor_telepon', '$metode_pembayaran', '$id_user', NOW())");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    }

    
    public function delete_pesanan($id_pesanan) {
        $this->db->trans_start();

        $this->db->query("DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'");

        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    }

}
