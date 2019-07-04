<?php
    class BukuTamu extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('bukutamu_model');
        }

        public function newdash()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/bigheader');
            $this->load->view('templates/body');
            $this->load->view('bukutamu/index');
            $this->load->view('templates/footer');
        }

        public function buat()
        {
            try
            {
                $data   = array(
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'pesan' => $this->input->post('pesan')
                );

                if($this->bukutamu_model->buat_tamu($data))
                {
                    echo stripslashes(json_encode('Success'));
                } else {
                    http_response_code(500);
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                http_response_code(404);
            }
        }

        public function getdata()
        {
            try{
                if($data = $this->bukutamu_model->get_data())
                {
                    $respon         = new \StdClass;
                    $respon->status = 'success';
                    $respon->nama   = $data['nama'];
                    $respon->email  = $data['email'];
                    $respon->pesan  = $data['pesan'];

                    http_response_code(200);
                    echo_stripslashes(json_encode($respon));
                } else {
                    http_response_code(500);
                    echo_stripslashes(json_encode('error'));
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                http_response_code(404);
            }
        }

        public function hapus_tamu($id)
        {
            echo 'sabar...';
            $hapus = $this->pages_model->hapus_tamu($id);
            if ($hapus > 0){
                $this->session->set_userdata('status', TRUE);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $this->session->set_userdata('statusfailed', TRUE);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }