<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['message'];
    var $app_data = [];
    public function header(){
        $this->load->view('front_page/header', $this->app_data);
    }
    public function footer(){
        $this->load->view('front_page/footer', $this->app_data);
    }
    public function index(){
        $this->header();
        $this->load->view('front_page/index', $this->app_data);
        $this->footer();
    }
    public function login() {
        $this->load->view('front_page/auth/login');
    }
    public function register() {
        $this->load->view('front_page/auth/registration');
    }
    public function district_news(){
        $this->header();
        $this->load->view('front_page/public_information/district_news');
        $this->footer();
    }
    public function detail_news(){
        $this->header();
        $this->load->view('front_page/public_information/detail_news');
        $this->footer();
    }
    public function help_information(){
        $this->header();
        $this->load->view('front_page/public_information/help_information');
        $this->footer();
    }

    public function insert_data()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone_number', 'No HP', 'required|trim|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[st_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('akses', 'Role Akses', 'required');
        $_POST["akses"]=3;
        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $where = array('email' => $this->session->userdata('email'));
            $data['user'] = $this->data->find('st_user', $where)->row_array();

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $alamat = $this->input->post('alamat');
            $akses = $this->input->post('akses');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $hash = hash("sha256", $password . config_item('encryption_key'));

            if (empty($this->input->post('akses'))) {
                $response['errors']['akses'] = "Role akses harus dipilih";
            }
                if (empty($this->input->post('akses'))) {
                    $response['errors']['akses'] = "Role akses harus dipilih";
                } else {
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'phone_number' => $telepon,
                        'id_credential' => $akses,
                        'username' => $username,
                        'password' => $hash,
                        'created_by' => $data['user']['id'],
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
            
        }
        echo json_encode($response);
    }
}