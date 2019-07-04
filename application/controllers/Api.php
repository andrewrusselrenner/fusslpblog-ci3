<?php
    class Api extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('bukutamu_model');
        }

        public function getdata()
        {
            
        }
    }