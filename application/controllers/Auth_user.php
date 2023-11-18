<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{
    var $module_js = ['auth_user'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
    }

    private function _init()
    {
        $this->app_data['module_js'] = $this->module_js;
    }

    public function index()
    {

    }

    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telepon', 'No HP', 'required|trim|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[st_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('password1', 'Ulangi', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hash = hash("sha256", $password . config_item('encryption_key'));
                    $data = array(
                        'name' => $nama,
                        'email' => $email,
                        'phone_number' => $telepon,
                        'id_credential' => '3',
                        'username' => $username,
                        'password' => $hash,
                    );

                    $this->data->insert('st_user', $data);
                        
                
                    $response['success'] = "<script>$(document).ready(function () {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                          });

                        Toast.fire({
                            icon: 'success',
                            title: 'Anda telah melakukan aksi tambah data Data berhasil dimasukkan'
                          })
                      });</script>";
        }
        echo json_encode($response);
    }
    
    public function login() {
        $this->load->view('front_page/auth/login');
        $this->load->view('js-custom', $this->app_data);
    }

    public function register() {
        $this->load->view('front_page/auth/registration');
        $this->load->view('js-custom', $this->app_data);
    }

    public function logout()
    {
        $data['user'] = $this->db->get_where('st_user', ['email' => $this->session->userdata('email')])->row_array();
        $timestamp = $this->db->query("SELECT NOW() as timestamp")->row()->timestamp;

        $where = array('id' => $data['user']['id']);
        $data = array('last_login' => $timestamp);
        $this->data->update('st_user', $where, $data);

        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('logged_in');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Anda telah logout,  </strong>Terima kasih sudah menggunakan sistem ini
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        redirect('admin');
    }
}