<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_admin extends CI_Controller
{
    var $module_js = ['manage-admin'];
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
        $this->app_data['user'] = $this->data->get($user)->row_array();
        $this->load->view('template-admin/start');
        $this->load->view('template-admin/header', $this->app_data);
        $this->load->view('menu-admin/manage_admin');
        $this->load->view('template-admin/footer');
        $this->load->view('template-admin/end');
        $this->load->view('js-custom', $this->app_data);
    }

    public function get_data()
    {
        $query = [
            'select' => 'a.id, a.name, a.email, a.image, a.phone_number, a.address, a.card_image, a.username, a.password, a.last_login, b.name as akses',
            'from' => 'st_user a',
            'join' => [
                'app_credential b, b.id = a.id_credential'
            ],
            'where' => [
                'a.is_deleted' => '0'
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function get_data_id()
    {
        $id = $this->input->post('id');
        $query = [
            'select' => 'a.id, a.name, a.email, a.image, a.phone_number, a.address, a.card_image, a.username, a.password, a.last_login, a.id_credential',
            'from' => 'st_user a',
            'where' => [
                'a.is_deleted' => '0',
                'a.id' => $id
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function insert_data()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telepon', 'No HP', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[st_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('password1', 'Ulangi', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
            if (empty($this->input->post('akses'))) {
                $response['errors']['akses'] = "Role akses harus dipilih";
            }
            if (empty($_FILES['image']['name'])) {
                $response['errors']['image'] = "Foto profil harus diupload";
            }
            if (empty($_FILES['card']['name'])) {
                $response['errors']['card'] = "Foto KTP harus diupload";
            }
        } else {
            $where = array('email' => $this->session->userdata('email'));
            $data['user'] = $this->data->find('st_user', $where)->row_array();

            $nama = $this->input->post('nama');
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
            if (empty($_FILES['image']['name'])) {
                $response['errors']['image'] = "Foto harus diupload";
            }
            if (empty($_FILES['card']['name'])) {
                $response['errors']['card'] = "Foto KTP harus diupload";
            } else {
                $data = array(
                    'name' => $nama,
                    'email' => $email,
                    'phone_number' => $telepon,
                    'address' => $alamat,
                    'id_credential' => $akses,
                    'username' => $username,
                    'password' => $hash,
                    'created_by' => $data['user']['id'],
                );

                if (!empty($_FILES['image']['name'])) {
                    $currentDateTime = date('Y-m-d_H-i-s');
                    $config['upload_path'] = './assets/image/user/profil/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['file_name'] = 'profil-' . $currentDateTime;
                    $config['max_size'] = 2048;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('image')) {
                        $response['errors']['image'] = strip_tags($this->upload->display_errors());
                        echo json_encode($response);
                        return;
                    } else {
                        $uploaded_data = $this->upload->data();
                        $data['image'] = $uploaded_data['file_name'];
                        $this->data->insert('st_user', $data);
                    }
                }

                $response['success'] = "Data successfully inserted!";
            }
        }
        echo json_encode($response);
    }
}