<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_district extends CI_Controller
{
    var $module_js = ['manage-district'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
        if (!$this->is_logged_in()) {
            redirect('admin');
        }
    }

    public function is_logged_in()
    {
        return $this->session->userdata('logged_in') === TRUE;
    }

    private function _init()
    {
        $this->app_data['module_js'] = $this->module_js;
    }

    public function index()
    {
        $query_menu = [
            'select' => 'id_parent,name, icon, link, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'is_admin' => '1'
            ]
        ];

        $query_dropdown = [
            'select' => 'id_parent,name,link,icon, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'type' => '2',
                'is_admin' => '1'
            ]
        ];

        $query_child = [
            'select' => 'id_parent,name,link,icon, type, is_admin',
            'from' => 'app_menu',
            'where' => [
                'type' => '3',
                'is_admin' => '1'
            ]
        ];

        $user = [
            'select' => 'a.id, a.name, a.email, a.image, a.phone_number, a.address, b.name as akses',
            'from' => 'st_user a',
            'join' => [
                'app_credential b, b.id = a.id_credential'
            ],
            'where' => [
                'a.is_deleted' => '0',
                'a.email' => $this->session->userdata('email')
            ]
        ];
        $this->app_data['get_menu'] = $this->data->get($query_menu)->result();
        $this->app_data['get_dropdown'] = $this->data->get($query_dropdown)->result();
        $this->app_data['get_child'] = $this->data->get($query_child)->result();
        $this->app_data['user'] = $this->data->get($user)->row_array();
        $this->load->view('template-admin/start');
        $this->load->view('template-admin/header', $this->app_data);
        $this->load->view('menu-admin/manage_district');
        $this->load->view('template-admin/footer');
        $this->load->view('template-admin/end');
        $this->load->view('js-custom', $this->app_data);
    }

    public function get_data()
    {
        $result = $this->data->get_all('district_profile')->result();
        echo json_encode($result);
    }

    public function edit_data()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');
        $this->form_validation->set_rules('map', 'Link Google Map', 'required|trim|valid_url');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $where = array('email' => $this->session->userdata('email'));
            $data['user'] = $this->data->find('st_user', $where)->row_array();

            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $telepon = $this->input->post('telepon');
            $email = $this->input->post('email');
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $map = $this->input->post('map');
            $timestamp = $this->db->query("SELECT NOW() as timestamp")->row()->timestamp;

            $data = array(
                'name' => $nama,
                'address' => $alamat,
                'phone_number' => $telepon,
                'email' => $email,
                'visi' => $visi,
                'misi' => $misi,
                'embed_address' => $map,
                'updated_date' => $timestamp,
                'updated_by' => $data['user']['id'],
            );

            $where = array('id' => $id);
            $updated = $this->data->update('district_profile', $where, $data);

            if (!$updated) {
                $response['errors']['database'] = "Failed to update data in the database.";
            } else {
                if (!empty($_FILES['image']['name'])) {
                    $currentDateTime = date('Y-m-d_H-i-s');
                    $config['upload_path'] = './assets/image/district';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = 2048;
                    $config['file_name'] = 'district-' . $currentDateTime;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $upload_data = $this->upload->data();
                        $logo = $upload_data['file_name'];

                        $data = array('logo' => $logo);
                        $where = array('id' => $id);
                        $this->data->update('district_profile', $where, $data);
                    } else {
                        $response['errors']['image'] = strip_tags($this->upload->display_errors());
                    }
                }

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