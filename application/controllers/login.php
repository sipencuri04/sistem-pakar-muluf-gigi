<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
    }
    public function index() 
    {
        $this->load->view('v_login'); 
    }
    function login_aksi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $sebagai = $this->input->post('sebagai');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
            if ($sebagai == "admin") {
                $cek = $this->M_data->cek_login('admin', $where)->num_rows();
                $data = $this->M_data->cek_login('admin', $where)->row();
                if ($cek > 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'username' => $data->username,
                        'status' => 'admin_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url() . 'admin');
                } else {
                    redirect(base_url() . 'login?alert=gagal');
                }
            } elseif ($sebagai == "petugas") {
                $cek = $this->M_data->cek_login('m_biodata_pasien', $where)->num_rows();
                $data = $this->M_data->cek_login('m_biodata_pasien', $where)->row();
                if ($cek == 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'nama' => $data->M_biodata_pasien_nama,
                        'username' => $data->username,
                        'status' => 'petugas_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url() . 'petugas');
                } else {
                    redirect(base_url() . 'login?alert=gagal');
                }
            } else {
                $this->load->view('v_login');
            }
        }
    }
}
