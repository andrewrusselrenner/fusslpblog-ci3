<?php
    class Post extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Latest Posts';
            $data['post'] = $this->post_model->get_post();

            $this->load->view('templates/header');

            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/navbar');
                $this->load->view('templates/bigheader');
                $this->load->view('templates/body'); 
            }

            $this->load->view('post/index', $data);
            
            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/footer');
            }
        }

        public $foto = '';
        public $fotoname = '';

        public function view($slug = NULL)
        {
            $data['tulisan'] = $this->post_model->get_post($slug);

            if (empty($data['tulisan'])) {
                show_404();
            }

            // $data['title'] = $data['tulisan']['title'];

            $this->load->view('templates/header');

            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/navbar');
                $this->load->view('templates/bigheader');
                $this->load->view('templates/body'); 
            }

            $this->load->view('post/view', $data);
            
            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/footer');
            }
        }

        public function create() {
            if($this->session->userdata('hakakses') !== 'penulis')
                redirect('akun/login', 'auto');

            $data['title'] = 'Buat Post';

            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('isiartikel', 'isi', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header');

                if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
                {
                    // Not show
                } else {
                    $this->load->view('templates/navbar');
                    $this->load->view('templates/bigheader');
                    $this->load->view('templates/body'); 
                }

                $this->load->view('post/create', $data);
                
                if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
                {
                    // Not show
                } else {
                    $this->load->view('templates/footer');
                }
            } else {
                $nama = 'gbrnama';
                // $data['gbrheader'] = ;
                ;
                // $this->uploadgbr($nama);
                // A list of words you don't allow
                $disallowedWords = array(
                    'Powered by Froala Editor',
                    'PoweredbyFroalaEditor',
                    'Froala'
                );
                $isiartikel = $this->input->post('isiartikel');
                $newisiartikel = str_replace('Powered by Froala Editor', 'Fusslp', $isiartikel);
                // Search for disallowed words.
                // The Regex used here should e.g. match 'are', but not match 'care' or 'stare'
                // foreach ($disallowedWords as $word) {
                //     if (preg_match('/^[~&a-z0-9 _-]+$/i', $isiartikel)) {
                //         $newisiartikel = preg_replace('/^[~&a-z0-9 _-]+$/i','Fusslp',$isiartikel);
                //         echo '<script>alert("Ada froala '.$newisiartikel.'");</script>';
                //     }
                // }

                // $sluga = ();
                $slug = strtolower(url_title($this->input->post('judul')));

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'slug' => $slug,
                    'isi' => $newisiartikel,
                    'kategori' => $this->input->post('kategori'),
                    'author' => $this->session->userdata('name'),
                    'GbrHeader' => $this->input->post('namagbr')
                );
                if ($this->post_model->create_post($data)){
                    $this->session->set_userdata('status', TRUE);
                    redirect('post/'.$slug,'refresh');
                }
            }
        }

        public function delete($id)
        {
            if($this->session->userdata('hakakses') !== 'penulis')
                redirect('akun/login', 'auto');
            
            if($this->post_model->hapus_post($id))
            {
                $namafoto = $this->input->post('namagbr');
                if(file_exists($file=FCPATH.'assets/img/'.$namafoto)){
                    unlink($file);
                }
                $this->session->set_userdata('status', TRUE);
                redirect('post','refresh');
            }
        }

        public function edit($slug)
        {
            if($this->session->userdata('hakakses') !== 'penulis')
                redirect('akun/login', 'auto');

            $data['tulisan'] = $this->post_model->get_post($slug);

            if (empty($data['tulisan'])) {
                show_404();
            }

            // $data['title'] = $data['tulisan']['title'];

            $this->load->view('templates/header');

            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/navbar');
                $this->load->view('templates/bigheader');
                $this->load->view('templates/body'); 
            }

            $this->load->view('post/edit', $data);
            
            if ($this->uri->segment(2) == 'masuk' || $this->uri->segment(2) == 'daftar')
            {
                // Not show
            } else {
                $this->load->view('templates/footer');
            }
        }

        public function update()
        {
            if($this->session->userdata('hakakses') !== 'penulis')
                redirect('akun/login', 'auto');
                
            $gbrpost = $this->input->post('gbrpost');
            $nama     = 'filegbr';

            // $this->uploadgbr($nama);

            // $fotoh = $this->foto;
            // $fotoh = $this->input->post('file');

            if($fotoh == NULL || $fotoh == '')
            {
                $postdata['file'] = $gbrpost;
            } else {
                $postdata['file'] = $fotoh;
            }
            
            if($this->post_model->update_post($postdata)){
                $slug = url_title($this->input->post('judul'));
                $this->session->set_userdata('status', TRUE);
                redirect('post/'.$slug,'refresh');
            }
        }

        // Untuk api atau dikirim dari luar php(eg. js/ajax)
        public function imgupload()
        {
            try {
                $nama = 'file';
                $aset = './assets/';
                $this->uploadgbr($nama);

                if ($this->foto == NULL)
                {
                    http_response_code(500);
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

        public function uploadgbr($nama)
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

                    // get name
                    // $data = array('gbrfile' => $dbpath);
                    // return $data['gbrfile'];
                }

            } catch (Exception $e) {
                // Send error response.
                echo $e->getMessage();
                http_response_code(404);
                $this->foto = NULL;
            }
        }

        public function cari()
        {
            $katakunci = $this->input->get('q', TRUE);
            
            $data['hasil'] = $this->post_model->caridb($katakunci);
            $data['keyword'] = $katakunci;

            $this->load->view('templates/header');
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/bigheader');
            $this->load->view('templates/body');
            $this->load->view('post/pencarian', $data);
            $this->load->view('templates/footer');
        }
    }