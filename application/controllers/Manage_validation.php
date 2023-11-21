<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_validation extends CI_Controller
{
    var $module_js = ['manage-validation'];
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
        $where = array('is_deleted' => '0');
        $this->app_data['select'] = $this->data->get_all('administration')->result();
        $this->app_data['get_menu'] = $this->data->get($query_menu)->result();
        $this->app_data['get_dropdown'] = $this->data->get($query_dropdown)->result();
        $this->app_data['get_child'] = $this->data->get($query_child)->result();
        $this->app_data['user'] = $this->data->get($user)->row_array();
        $this->load->view('template-admin/start');
        $this->load->view('template-admin/header', $this->app_data);
        $this->load->view('menu-admin/manage_validation');
        $this->load->view('template-admin/footer');
        $this->load->view('template-admin/end');
        $this->load->view('js-custom', $this->app_data);
    }
    public function get_data()
    {
        $query = [
            'select' => 'a.id, a.id_administration, a.kk, a.akta, a.ktp, a.kia, a.pengantar_rt, a.ktp_asli, a.foto, a.dokumen_pendukung,a.uploaded_date, b.submit_date,c.name, b.status, d.name AS name_letter, a.keterangan',
            'from' => 'administration_has_requirements a',
            'join' => [
                'administration b, b.id = a.id_administration',
                'st_user c , b.id_user = c.id',
                'letter d , b.id_letter = d.id'
            ],
            'where' => [
                'a.is_deleted' => '0',
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }
    public function get_data_id()
    {
        $id = $this->input->post('id');
        $query = [
            'select' => 'a.id, a.id_administration, a.kk, a.akta, a.ktp, a.kia, a.pengantar_rt, a.ktp_asli, a.foto, a.dokumen_pendukung,a.uploaded_date, b.submit_date,c.name, b.status, d.name AS name_letter,a.keterangan',
            'from' => 'administration_has_requirements a',
            'join' => [
                'administration b, b.id = a.id_administration',
                'st_user c , b.id_user = c.id',
                'letter d , b.id_letter = d.id'

            ],
            'where' => [
                'a.id' => $id,
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function edit_data()
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $id = $this->input->post('id');
            $status = $this->input->post('status');
            $data = array(
                'status' => $status
            );
            $where = array('id' => $id);
            $updated = $this->data->update('administration', $where, $data);

            if (!$updated) {
                $response['errors']['database'] = "Failed to update data in the database.";
            } else {
                $keterangan = $this->input->post('keterangan');
                $this->data->update('administration_has_requirements', array('id_administration' => $id), array('keterangan' => $keterangan));
                $response['success'] = "Data successfully inserted!";
            }
        }
        echo json_encode($response);
    }

    public function edit_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $data = array(
            'status' => $status
        );
        $where = array('id' => $id);
        $this->data->update('administration', $where, $data);

        $response['success'] = "Data successfully inserted!";
        echo json_encode($response);
    }
}
