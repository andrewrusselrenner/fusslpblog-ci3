<?php

    class Pages extends CI_Controller
    {
        public function view($page = 'home')
        {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');

            if (!current_url('') == current_url('masuk') || !current_url() == current_url('daftar'))
            {
                // Not show
            } else {
                $this->load->view('templates/navbar');
                $this->load->view('templates/bigheader');
                $this->load->view('templates/body');
                
            }

            $this->load->view('pages/'.$page, $data);
            
            if (!current_url('') == current_url('masuk') || !current_url() == current_url('daftar'))
            {
                // Not show
            } else {
                $this->load->view('templates/footer');
            }
        }

        public function tentang()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/bigheader');
            $this->load->view('templates/body');
            $this->load->view('pages/tentang');
            $this->load->view('templates/footer');
        }

        public function bukutamu()
        {
            $data['entri'] = $this->pages_model->get_btentri();

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/bigheader');
            $this->load->view('templates/body');
            $this->load->view('pages/formbukutamu');
            $this->load->view('pages/entribukutamu', $data);
            $this->load->view('templates/footer');
        }

        public function addentribk()
        {   
            try {
                $imgpath = 'img/';
                $aset = './assets/';
                $config['upload_path']          = $aset.$imgpath;
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['encrypt_name']         = TRUE;
                $config['file_ext_tolower']     = TRUE;

                $this->upload->initialize($config);
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload($nama))
                {
                    http_response_code(300);
                } else {
                    // File upload success
                    // get uploaded file data
                    $upload_data = $this->upload->data();

                    $filename = $upload_data['file_name'];
                    $dbpath = $imgpath.$filename;
                    $this->foto = $imgpath.$filename;
                    $this->fotoname = $filename;
                }

                // Generate response.
                $response = new \StdClass;
                $response->link = base_url().$aset.$this->foto;
                $response->filename = $this->fotoname;

                // Send response.
                echo stripslashes(json_encode($response));
            } catch (Exception $e) {
                // Send error response.
                echo $e->getMessage();
                echo '<script>bootbox.alert("'.$e->getMessage().'");</script>';
                http_response_code(500);
            }
        }

        public function buatentri()
        {
            try
            {
                $data   = array(
                    'namapenulis' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'pesan' => $this->input->post('pesan')
                );

                if($this->pages_model->buat_tamu($data) > 0)
                {
                    http_response_code(200);
                    // echo stripslashes(json_encode('success'));
                } else {
                    http_response_code(400);
                    echo '<script> alert('.$this->input->post('nama').'); </script>';
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                http_response_code(201);
            }
        }

        public function get_btentri()
        {
            try {
                $data = $this->pages_model->get_btentri();
                if(!$data)
                {
                    http_response_code(300);

                    // Send response.
                    echo stripslashes(json_encode('error sayyy.....'));
                } else {
                    // $dataentri = $data->row_array();
                    // echo $data['Email'];

                    // $object = $data;
                    foreach ($data as $row) {
                        $jsondata[] = array(
                                            'namapenulis' => $row['NamaPenulis'] ,
                                            'email' => $row['Email'],
                                            'pesan'   => $row['Pesan'],
                                            'ava'   => $row['Ava'],
                                            'tanggal'   => $row['Tanggal']  
                                        );
                    }
                    // Send response.
                    echo stripslashes(json_encode($jsondata));
                    http_response_code(200);
                }
            } catch (Exception $e) {
                // Send error response.
                echo $e->getMessage();
                echo '<script>bootbox.alert("'.$e->getMessage().'");</script>';
                http_response_code(500);
            }
        }

        public function hapus_bt($id)
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