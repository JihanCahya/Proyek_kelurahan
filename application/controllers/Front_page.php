<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['letter'];
    var $app_data = [];

    public function __construct()
    {
        parent::__construct();
        $this->_init();
        if (!$this->is_logged_in()) {
            $this->header();
        } else {
            $this->header_1();
        }
    }

    public function is_logged_in()
    {
        return $this->session->userdata('logged_in_1') === TRUE;
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
        $this->load->view('front_page/index', $this->app_data);
        $this->footer();
    }
    public function village_history()
    {
        $this->load->view('front_page/district_profile/village_history');
        $this->footer();
    }
    public function sub_district_structure()
    {
        $this->load->view('front_page/district_profile/sub_district_structure');
        $this->footer();
    }
    public function vission_mission()
    {
        $this->load->view('front_page/district_profile/vission_mission');
        $this->footer();
    }
    public function location_contact()
    {
        $this->load->view('front_page/district_profile/location_contact');
        $this->footer();
    }
    public function district_news()
    {
        $this->load->view('front_page/public_information/district_news');
        $this->footer();
    }
    public function detail_news()
    {

        $this->load->view('front_page/public_information/detail_news');
        $this->footer();
    }
    public function help_information()
    {

        $this->load->view('front_page/public_information/help_information');
        $this->footer();
    }
    public function detail_information()
    {
        $this->load->view('front_page/public_information/detail_information');
        $this->footer();
    }
    public function submission_letter()
    {
        $this->load->view('front_page/administrative_services/submission_letter');
        $this->footer();
    }
    public function history()
    {
        $this->load->view('front_page/administrative_services/history');
        $this->footer();
    }
    public function profile()
    {
        $this->load->view('front_page/profile');
        $this->footer();
    }
    public function letter_1()
    {
        $this->load->view('front_page/administrative_services/letter_1');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }
    public function letter_2()
    {
        $this->load->view('front_page/administrative_services/letter_2');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }
    public function letter_3()
    {
        $this->load->view('front_page/administrative_services/letter_3');
        $this->footer();
        $this->load->view('js-custom', $this->app_data);
    }

    public function insert_1()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();

        $timestamp = $this->db->query("SELECT NOW() as timestamp")->row()->timestamp;

        $insert = array(
            'id_user' => $data['user']['id'],
            'id_letter' => '1',
            'submit_date' => $timestamp,
        );

        $inserted_id = $this->data->insert('administration', $insert);

        if (!$inserted_id) {
            $response['errors']['database'] = "Failed to insert data into the database.";
        } else {
            if (!empty($_FILES['kk']['name']) && !empty($_FILES['kia']['name']) && !empty($_FILES['akta']['name']) && !empty($_FILES['pengantar']['name'])) {
                $currentDateTime = date('Y-m-d_H-i-s');

                $config['upload_path'] = './assets/image/administration/requirement/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2048;

                // Upload KK
                $config['file_name'] = 'kk_' . $currentDateTime;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('kk')) {
                    $upload_data = $this->upload->data();
                    $file_kk = $upload_data['file_name'];

                    // Upload KIA
                    $config['file_name'] = 'kia_' . $currentDateTime;
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('kia')) {
                        $upload_data = $this->upload->data();
                        $file_kia = $upload_data['file_name'];

                        // Upload AKTA
                        $config['file_name'] = 'akta_' . $currentDateTime;
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('akta')) {
                            $upload_data = $this->upload->data();
                            $file_akta = $upload_data['file_name'];

                            // Upload PENGANTAR
                            $config['file_name'] = 'pengantar_' . $currentDateTime;
                            $this->upload->initialize($config);
                            if ($this->upload->do_upload('pengantar')) {
                                $upload_data = $this->upload->data();
                                $file_pengantar = $upload_data['file_name'];

                                $requirement = array(
                                    'id_administration' => $inserted_id,
                                    'kk' => $file_kk,
                                    'akta' => $file_akta,
                                    'kia' => $file_kia,
                                    'pengantar' => $file_pengantar,
                                );
                                $this->data->insert('administration_has_requirements', $requirement);
                                $response['success'] = "Data successfully inserted!";
                            } else {
                                $response['errors']['pengantar'] = $this->upload->display_errors();
                            }
                        } else {
                            $response['errors']['akta'] = $this->upload->display_errors();
                        }
                    } else {
                        $response['errors']['kia'] = $this->upload->display_errors();
                    }
                } else {
                    $response['errors']['kk'] = $this->upload->display_errors();
                }
            } else {
                $response['errors']['pengantar'] = 'Please upload all required files (KK, KIA, AKTA, PENGANTAR)';
            }
        }
        echo json_encode($response);
    }
}