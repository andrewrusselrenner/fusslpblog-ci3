<?php
    class akun_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function getin($data)
        {
            // $this->db->get_where('author', $data);    
            $result = $this->db->get_where('author', $data);
            return $result;
        }
    }