<?php
    class pages_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_btentri()
        {
            $this->db->order_by('tanggal', 'desc');
            $kueri = $this->db->get('bukutamu');
            
            return $kueri->result_array();
        }

        public function buat_tamu($data)
        {
            $this->db->insert('bukutamu', $data);
            return $this->db->affected_rows();
        }

        public function hapus_tamu($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('bukutamu');
            return $this->db->affected_rows();
        }

        public function update_tamu($id, $data)
        {
            $this->db->where('id', $id);
            $this->db->update('bukutamu', $data);
        }
    }