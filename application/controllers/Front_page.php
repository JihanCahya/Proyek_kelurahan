<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['letter', 'history', 'message', 'profile'];
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
        $where = array('id' => '1');
        $this->app_data['profile'] = $this->data->find('district_profile', $where)->result();
        $this->load->view('front_page/header', $this->app_data);
    }
    public function header_1()
    {
        $where = array('id' => '1');
        $this->app_data['profile'] = $this->data->find('district_profile', $where)->result();
        $this->load->view('front_page/header_1', $this->app_data);
    }
    public function footer()
    {
        $this->load->view('front_page/footer', $this->app_data);
    }
    public function index()
    {
        $this->check_auth();
        //carousel menu
        $where = array('is_deleted' => '0');
        $this->app_data['carousel'] = $this->data->find('carousel_menu', $where)->result();

        // query perangkat kelurahan home
        $query_perangkat = [
            'select' => 'a.name, b.name_jabatan, a.image',
            'from' => 'employee a',
            'join' => [
                'jabatan b, b.id_jabatan = a.id_bridge'
            ],
            'where' => [
                'a.is_deleted' => '0'
            ]
        ];
        $this->app_data['perangkat'] = $this->data->get($query_perangkat)->result();
        // end query perangkat kelurahan home

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
        $this->load->view('front_page/district_profile/location_contact', $this->app_data);
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
        $where = array('is_deleted' => '0', 'status' => '1', 'id' => $x);
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/detail_news', $this->berita);
        $this->footer();
    }
    public function help_information()
    {
        $this->check_auth();
        $where = array('is_deleted' => '0', 'status' => '2');
        $this->berita['news'] = $this->data->find('news', $where)->result();
        $this->load->view('front_page/public_information/help_information', $this->berita);
        $this->footer();
    }
    public function detail_information($x)
    {
        $this->check_auth();
        $where = array('is_deleted' => '0', 'status' => '2', 'id' => $x);
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

    public function insert_1()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();

        if (empty($_FILES['kia']['name'])) {
            $response['errors']['kia1'] = "KIA harus diupload";
        }
        if (empty($_FILES['kk']['name'])) {
            $response['errors']['kk1'] = "KK harus diupload";
        }
        if (empty($_FILES['akta']['name'])) {
            $response['errors']['akta1'] = "Akta harus diupload";
        }
        if (empty($_FILES['pengantar']['name'])) {
            $response['errors']['pengantar1'] = "Pengantar harus diupload";
        } else {
            if (!empty($_FILES['kia']['name'])) {
                $currentDateTime = date('Y-m-d_H-i-s');
                $config['upload_path'] = './assets/image/administration/requirement/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2048;
                $config['file_name'] = 'requirement_' . $currentDateTime;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('kia')) {
                    $upload_data = $this->upload->data();
                    $kia = $upload_data['file_name'];

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

                            if (!empty($_FILES['akta']['name'])) {
                                $currentDateTime = date('Y-m-d_H-i-s');
                                $config['upload_path'] = './assets/image/administration/requirement/';
                                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                $config['max_size'] = 2048;
                                $config['file_name'] = 'requirement_' . $currentDateTime;
                                $this->load->library('upload', $config);

                                if ($this->upload->do_upload('pengantar')) {
                                    $upload_data = $this->upload->data();
                                    $akta = $upload_data['file_name'];

                                    if (!empty($_FILES['kk']['name'])) {
                                        $currentDateTime = date('Y-m-d_H-i-s');
                                        $config['upload_path'] = './assets/image/administration/requirement/';
                                        $config['allowed_types'] = 'gif|jpg|jpeg|png';
                                        $config['max_size'] = 2048;
                                        $config['file_name'] = 'requirement_' . $currentDateTime;
                                        $this->load->library('upload', $config);

                                        if ($this->upload->do_upload('kk')) {
                                            $upload_data = $this->upload->data();
                                            $kk = $upload_data['file_name'];

                                            $insert = array(
                                                'id_user' => $data['user']['id'],
                                                'id_letter' => '2'
                                            );
                                            $inserted_id = $this->data->insert('administration', $insert);

                                            $this->data->insert('administration_has_requirements', array('id_administration' => $inserted_id, 'kia' => $kia, 'pengantar_rt' => $pengantar, 'kk' => $kk, 'akta' => $akta));
                                            $response['success'] = "Data successfully inserted!";
                                        } else {
                                            $response['errors']['kk1'] = $this->upload->display_errors();
                                        }
                                    }
                                } else {
                                    $response['errors']['akta1'] = $this->upload->display_errors();
                                }
                            }
                        } else {
                            $response['errors']['pengantar1'] = $this->upload->display_errors();
                        }
                    }
                } else {
                    $response['errors']['ktp1'] = $this->upload->display_errors();
                }
            }
        }
        echo json_encode($response);
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

    public function insert_3()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();

        if (empty($_FILES['ktp']['name'])) {
            $response['errors']['ktp3'] = "KTP harus diupload";
        }
        if (empty($_FILES['pengantar']['name'])) {
            $response['errors']['pengantar3'] = "Pengantar harus diupload";
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
                                'id_letter' => '3'
                            );
                            $inserted_id = $this->data->insert('administration', $insert);

                            $this->data->insert('administration_has_requirements', array('id_administration' => $inserted_id, 'ktp' => $ktp, 'pengantar_rt' => $pengantar));
                            $response['success'] = "Data successfully inserted!";
                        } else {
                            $response['errors']['pengantar3'] = $this->upload->display_errors();
                        }
                    }
                } else {
                    $response['errors']['ktp3'] = $this->upload->display_errors();
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
    public function get_data_id()
    {
        $id = $this->input->post('id');

        $query = [
            'select' => 'a.id, a.submit_date, a.finish_date, b.name, c.name as letter_name, d.keterangan',
            'from' => 'administration a',
            'join' => [
                'st_user b, b.id = a.id_user',
                'letter c, c.id = a.id_letter',
                'administration_has_requirements d, d.id_administration = a.id'
            ],
            'where' => [
                'a.id' => $id,
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
        $this->load->view('js-custom', $this->app_data);
    }
    public function get_profile()
    {
        $where = array('email' => $this->session->userdata('email'));
        $data['user'] = $this->data->find('st_user', $where)->row_array();

        $where = array('id' => $data['user']['id']);
        $result = $this->data->find('st_user', $where)->result();
        echo json_encode($result);
    }

    public function edit_profile()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telepon', 'No HP', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password Baru', 'trim|min_length[8]');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $where = array('email' => $this->session->userdata('email'));
            $data['user'] = $this->data->find('st_user', $where)->row_array();

            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');
            $alamat = $this->input->post('alamat');
            $username = $this->input->post('username');
            $password = $this->input->post('password1');
            $hash = hash("sha256", $password . config_item('encryption_key'));
            $timestamp = $this->db->query("SELECT NOW() as timestamp")->row()->timestamp;

            $data = array(
                'name' => $nama,
                'email' => $email,
                'phone_number' => $telepon,
                'address' => $alamat,
                'username' => $username,
                'updated_date' => $timestamp,
                'updated_by' => $data['user']['id'],
            );

            if (!empty($password)) {
                $data1 = array('password' => $hash);
                $where = array('id' => $id);
                $update = $this->data->update('st_user', $where, $data1);
            }

            $where = array('id' => $id);
            $updated = $this->data->update('st_user', $where, $data);

            if (!$updated) {
                $response['errors']['database'] = "Failed to update data in the database.";
            } else {
                if (!empty($_FILES['profil']['name'])) {
                    $currentDateTime = date('Y-m-d_H-i-s');
                    $config['upload_path'] = './assets/image/user/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = 2048;
                    $config['file_name'] = $username . ' - ' . $currentDateTime;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('profil')) {
                        $upload_data = $this->upload->data();
                        $file_name = $upload_data['file_name'];

                        $data = array('image' => $file_name);
                        $where = array('id' => $id);
                        $this->data->update('st_user', $where, $data);
                    } else {
                        $response['errors']['image'] = strip_tags($this->upload->display_errors());
                    }
                }

                if (!empty($_FILES['ktp']['name'])) {
                    $currentDateTime = date('Y-m-d_H-i-s');
                    $config['upload_path'] = './assets/image/user/';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = 2048;
                    $config['file_name'] = $username . ' - ' . $currentDateTime;
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('ktp')) {
                        $upload_data = $this->upload->data();
                        $file_name = $upload_data['file_name'];

                        $data = array('card_image' => $file_name);
                        $where = array('id' => $id);
                        $this->data->update('st_user', $where, $data);
                    } else {
                        $response['errors']['image'] = strip_tags($this->upload->display_errors());
                    }
                }
                $response['success'] = "Data successfully updated!";
            }
        }
        echo json_encode($response);
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