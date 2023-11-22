<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['letter', 'history', 'message'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
    }

    public function is_logged_in()
    {
        return $this->session->userdata('logged_in_1') === TRUE;
    }

    public function check_auth()
    {
        if (!$this->is_logged_in()) {
            $this->header();
        } else {
            $this->header_1();
        }
    }

    private function _init()
    {
        $this->app_data['module_js'] = $this->module_js;
    }

    public function header()
    {
        $this->load->view('front_page/header', $this->app_data);
    }
    public function header_1()
    {
        $this->load->view('front_page/header_1', $this->app_data);
    }
    public function footer()
    {
        $this->load->view('front_page/footer', $this->app_data);
    }
    public function index()
    {
        $this->check_auth();
        $this->load->view('front_page/index', $this->app_data);
        $this->footer();
    }
    public function village_history()
    {
        $this->check_auth();
        $this->load->view('front_page/district_profile/village_history');
        $this->footer();
    }
    public function sub_district_structure()
    {
        $this->check_auth();
        $this->load->view('front_page/district_profile/sub_district_structure');
        $this->footer();
    }
    public function vission_mission()
    {
        $this->check_auth();
        $this->load->view('front_page/district_profile/vission_mission');
        $this->footer();
    }
    public function location_contact()
    {
        $this->check_auth();
        $where = array('updated_by' => '1');
        $this->app_data['location'] = $this->data->find('district_profile', $where)->result();
        $this->load->view('front_page/district_profile/location_contact',$this->app_data);
        $this->footer();
    }
    public function district_news()
    {
        $this->check_auth();
        $where = array('is_deleted' => '0', 'status' => '1');
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/district_news', $this->berita);
        $this->footer();
    }
    public function detail_news($x)
    {
        $this->check_auth();
        $where = array('is_deleted' => '0', 'status' => '1', 'id'=>$x);
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/detail_news', $this->berita);
        $this->footer();
    }
    public function help_information()
    {
        $this->check_auth();        
        $where = array('is_deleted' => '0','status' => '2');
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/help_information', $this->berita);
        $this->footer();
    }
    public function detail_information($x)
    {
        $this->check_auth();
        $where = array('is_deleted' => '0', 'status' => '2','id'=>$x);
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/detail_information', $this->berita);
        $this->footer();
    }
    public function submission_letter()
    {
        $this->check_auth();
        $this->load->view('front_page/administrative_services/submission_letter');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }

    public function insert_2()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();

        if (empty($_FILES['ktp']['name'])) {
            $response['errors']['ktp2'] = "KTP harus diupload";
        }
        if (empty($_FILES['pengantar']['name'])) {
            $response['errors']['pengantar2'] = "Pengantar harus diupload";
        } else {
            if (!empty($_FILES['ktp']['name'])) {
                $currentDateTime = date('Y-m-d_H-i-s');
                $config['upload_path'] = './assets/image/administration/requirement/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['file_name'] = 'requirement_' . $currentDateTime;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('ktp')) {
                    $upload_data = $this->upload->data();
                    $ktp = $upload_data['file_name'];

                    if (!empty($_FILES['pengantar']['name'])) {
                        $currentDateTime = date('Y-m-d_H-i-s');
                        $config['upload_path'] = './assets/image/administration/requirement/';
                        $config['allowed_types'] = 'gif|jpg|jpeg|png';
                        $config['max_size'] = 2048;
                        $config['file_name'] = 'requirement_' . $currentDateTime;
                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('pengantar')) {
                            $upload_data = $this->upload->data();
                            $pengantar = $upload_data['file_name'];
                            $insert = array(
                                'id_user' => $data['user']['id'],
                                'id_letter' => '2'
                            );
                            $inserted_id = $this->data->insert('administration', $insert);

                            $this->data->insert('administration_has_requirements', array('id_administration' => $inserted_id, 'ktp' => $ktp, 'pengantar_rt' => $pengantar));
                            $response['success'] = "Data successfully inserted!";
                        } else {
                            $response['errors']['pengantar2'] = $this->upload->display_errors();
                        }
                    }
                } else {
                    $response['errors']['ktp2'] = $this->upload->display_errors();
                }
            }
        }
        echo json_encode($response);
    }

    public function history()
    {
        $this->check_auth();
        $this->load->view('front_page/administrative_services/history');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }

    public function get_data_history()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();
        $query = [
            'select' => 'a.id, a.submit_date, a.status, b.name, c.name as letter_name',
            'from' => 'administration a',
            'join' => [
                'st_user b, b.id = a.id_user',
                'letter c, c.id = a.id_letter'
            ],
            'where' => [
                'a.id_user' => $data['user']['id'],
            ]
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function profile()
    {
        $this->check_auth();
        $this->load->view('front_page/profile');
        $this->footer();
    }
    public function insert_message()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('subjek', 'subjek', 'required|trim');
        $this->form_validation->set_rules('pesan', 'pesan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $subjek = $this->input->post('subjek');
            $pesan = $this->input->post('pesan');

            $data = array(
                'name' => $nama,
                'email' => $email,
                'subject' => $subjek,
                'message' => $pesan,
            );
            $this->data->insert('message_user', $data);

            $response['success'] = "Data successfully inserted!";
        }
        echo json_encode($response);
    }
}