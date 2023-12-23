<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    function __construct()
{
    parent::__construct();
    if($this->session->userdata('status')!="admin_login")
    {
        redirect(base_url().'login?alert=belum_login');
    }
}
function index () {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_index');
    $this->load->view('admin/v_footer');
}
function logout () {
    $this->session->sess_destroy() ;
    redirect(base_url().'login/?alert=logout');
}
function ganti_password() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_ganti_password');
    $this->load->view('admin/v_footer');
}
function ganti_password_aksi () {
    $baru = $this->input->post('password_baru');
    $ulang = $this->input->post('password_ulang');
    $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[password_ulang]');
    $this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');    
    if($this->form_validation->run()!=false)
    {
        $id = $this->session->userdata('id');
        $where = array('id'=>$id);
        $data = array('password'=>md5($baru));
        $this->M_data->update_data($where,$data,'admin');
        redirect(base_url().'admin/ganti_password/?alert=sukses');
    }else
    {
        $this->load->view('admin/v_header');
        $this->load->view('admin/v_ganti_password');
        $this->load->view('admin/v_footer');
    }
}
function petugas() {
    $data['petugas'] = $this->M_data->get_data('M_biodata_pasien')->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_petugas', $data);
    $this->load->view('admin/v_footer');
}
function petugas_tambah() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_petugas_tambah');
    $this->load->view('admin/v_footer');
}
function petugas_tambah_aksi() {
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama'); 
    $username = $this->input->post('username');
    $password = $this->input->post('password'); 
    $data = array(
        'nik' => $nik,'M_biodata_pasien_nama' => $nama, 'username' => $username,'password' => md5($password) 
    );
    $this->M_data->insert_data($data, 'M_biodata_pasien');
    redirect(base_url().'admin/petugas');
}
function petugas_edit($id) {
    $where = array('id' => $id);
    $data['petugas'] = $this->M_data->get_data('M_biodata_pasien', $where)->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_petugas_edit', $data);
    $this->load->view('admin/v_footer');
}
function petugas_update() {
    $id = $this->input->post('id');
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array('id' => $id);
    if ($password == "") {
        $data = array(
            'NIK' => $nik,
            'M_biodata_pasien_nama' => $nama,
            'username' => $username
        );
    } else {
        $data = array(
            'NIK' => $nik,
            'M_biodata_pasien_nama' => $M_biodata_pasien_nama,
            'username' => $username,
            'password' => md5($password)
        );
        $this->M_data->update_data($where, $data, 'M_biodata_pasien');
    }
    redirect(base_url().'admin/petugas');
}
function petugas_hapus($id) {
    $where = array('id' => $id);
    $this->M_data->delete_data('M_biodata_pasien', $where);
    redirect(base_url().'admin/petugas');
}
  
//*******************************************  UNTUK GEJALA GEJALA NYA YA TEMAN TEMAN *********************************************** */
public function gejala() {
    $data['gejala'] = $this->M_data->get_data('gejala')->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_gejala', $data);
    $this->load->view('admin/v_footer');
}

public function gejala_tambah() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_gejala_tambah');
    $this->load->view('admin/v_footer');
}

public function gejala_tambah_aksi() {
    $kode_gejala = $this->input->post('kode_gejala');
    $nama_gejala = $this->input->post('nama_gejala');
    $MB = $this->input->post('MB');
    $MD = $this->input->post('MD');

    $data = array(
        'kode_gejala' => $kode_gejala,
        'nama_gejala' => $nama_gejala,
        'MB' => $MB,
        'MD' => $MD
    );

    $this->M_data->insert_data($data, 'gejala');
    redirect(base_url().'admin/gejala');
}

public function gejala_edit($id) {
    $data['gejala'] = $this->M_data->edit_data('gejala', array('id' => $id))->row(); 
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_gejala_edit', $data);
    $this->load->view('admin/v_footer');
}
        
//*******************************************  UNTUK SOLUSI NYA YA TEMAN TEMAN *********************************************** */
public function obat() {
    $data['obat'] = $this->M_data->get_data('obat')->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_obat', $data);
    $this->load->view('admin/v_footer');
}

public function obat_tambah() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_obat_tambah');
    $this->load->view('admin/v_footer');
}

public function obat_tambah_aksi() {
    $kode_obat = $this->input->post('kode_obat');
    $nama_obat = $this->input->post('nama_obat');
    
    $data = array(
        'kode_obat' => $kode_obat,
        'nama_obat' => $nama_obat,
        
    );

    $this->M_data->insert_data($data, 'obat');
    redirect(base_url().'admin/obat');
}

public function obat_edit($id) {
    $data['obat'] = $this->M_data->edit_data('obat', array('id' => $id))->row(); 
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_obat_edit', $data);
    $this->load->view('admin/v_footer');
}


//*******************************************  UNTUK SOLUSI NYA YA TEMAN TEMAN *********************************************** */
public function solusi() {
    $data['solusi'] = $this->M_data->get_data('solusi')->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_solusi', $data);
    $this->load->view('admin/v_footer');
}

public function solusi_tambah() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_solusi_tambah');
    $this->load->view('admin/v_footer');
}

public function solusi_tambah_aksi() {
    $kode_solusi = $this->input->post('kode_solusi');
    $nama_solusi = $this->input->post('nama_solusi');
    
    $data = array(
        'kode_solusi' => $kode_solusi,
        'nama_solusi' => $nama_solusi,
        
    );

    $this->M_data->insert_data($data, 'solusi');
    redirect(base_url().'admin/solusi');
}

public function solusi_edit($id) {
    $data['solusi'] = $this->M_data->edit_data('solusi', array('id_solusi' => $id))->row(); 
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_solusi_edit', $data);
    $this->load->view('admin/v_footer');
}


//*******************************************  UNTUK PENYAKIT NYA YA TEMAN TEMAN *********************************************** */

public function penyakit() {
    $data['penyakit'] = $this->M_data->get_data('penyakit')->result();
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_penyakit', $data);
    $this->load->view('admin/v_footer');
}

public function penyakit_tambah() {
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_penyakit_tambah');
    $this->load->view('admin/v_footer');
}

public function penyakit_tambah_aksi() {
    $kode_penyakit = $this->input->post('kode_penyakit');
    $nama_penyakit = $this->input->post('nama_penyakit');
    $obat = $this->input->post('obat');
    $solusi = $this->input->post('solusi');
    
    $data = array(
        'kode_penyakit' => $kode_penyakit,
        'nama_penyakit' => $nama_penyakit,
        'obat' => $obat,
        'solusi' => $solusi,
        
    );

    $this->M_data->insert_data($data, 'penyakit');
    redirect(base_url().'admin/penyakit');
}




}


