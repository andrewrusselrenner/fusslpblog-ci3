<?php
    class Ganti extends CI_Controller
    {
        public function lihat()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/body');
            $this->load->view('templates/bigheader');
            $this->load->view('jsreplace/lihat');
            $this->load->view('templates/footer');
        }

        public function tesjson()
        {
            try {
                $contoh = new \StdClass;
                $contoh->name = 'john';
                $contoh->school = 'dallas state';
                $contoh->state = 'CL';
                $contoh->gender = 'male';
                $contoh->status = 'single wkwkwk';

                $encode = json_encode($contoh);
                // Send response.
                echo stripslashes($encode);

                $data = array(
                    'namadata' => 'hiyyaa coba lagi',
                    'data' => $encode
                );

                $jsoninsert = $this->ganti_model->insertjson($data);

                // $contoh =  '{"name":"jack","school":"colorado state","city":"NJ","id":null}';
            } catch (Exception $e) {
                // Send error response.
                echo $e->getMessage();
                echo '<script>alert("'.$e->getMessage().'");</script>';
                http_response_code(500);
            }
        }

        public function liatjson($id = NULL)
        {
            try {
                $datajson = $this->ganti_model->getjson($id);
                
                $hasildata = json_decode($datajson['data'], true);

                var_dump($hasildata);
                var_dump($datajson['data']);
                // var_dump($datajson[]);
            } catch (Exception $e) {
                // Send error response.
                echo $e->getMessage();
                echo '<script>alert("'.$e->getMessage().'");</script>';
                http_response_code(500);
            }
		}
		
		public function asp()
		{
			$this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/body');
            $this->load->view('templates/bigheader');
            $this->load->view('jsreplace/asp');
            $this->load->view('templates/footer');
		}
    }
