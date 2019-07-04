<?php
    class ganti_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function insertjson($data)
        {
            $masukin = $this->db->insert('testable', $data);
            return $masukin;
        }

        public function getjson($id = FALSE)
        {
            if($id === false)
            {
                // $this->db->order_by('tanggal', 'desc');
                $kueri = $this->db->get('testable');
                
                return $kueri->result_array();
            }

            $kueri = $this->db->get_where('testable', array('id' => $id));

            return $kueri->row_array();
        }
    }
    