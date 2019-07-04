<?php
    class Akun extends CI_Controller
    {

        public function login()
        {
            if($this->session->userdata('logged_in') === TRUE)
                redirect('/', 'auto');

            $this->form_validation->set_rules('surel', 'email', 'required');
            $this->form_validation->set_rules('katasandi', 'password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header');
                $this->load->view('templates/body');
                $this->load->view('akun/login');
                $this->load->view('templates/footer');
            } else {
                if ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    echo 'waitdamenit.........';
                    $data = array(
                        'email' => $this->input->post('surel'),
                        'password' => md5($this->input->post('katasandi'))
                    );

                    $check = $this->akun_model->getin($data);

                    if($check->num_rows() > 0)
                    {
                        $datalogin = $check->row_array();
                        $sesdata = array(
                            'name' => $datalogin['Nama'],
                            'email' => $datalogin['Email'],
                            'hakakses' => $datalogin['HakAkses'],
                            'logged_in' => TRUE,
                            'statuslogin' => TRUE
                        );
                        $this->session->set_userdata($sesdata);
                        redirect('/','refresh');
                    } else {
                        echo '<script>alert("Email/PW salah gaess..");</script>';
                        echo $this->session->set_flashdata('msg', 'Email/PW salah gaess..');
                        redirect('akun/login', 'auto');
                    }
                }
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect($this->agent->referrer());
        }

        public function dashboard()
        {
            if($this->session->userdata('logged_in') !== TRUE)
                redirect('akun/login', 'auto');
            
            $data['post'] = $this->post_model->getpostbyname();
            $data['bukutamu'] = $this->pages_model->get_btentri();

            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/bigheader');
            $this->load->view('templates/body');
            $this->load->view('akun/dash', $data);
            $this->load->view('templates/footer');
        }
    }