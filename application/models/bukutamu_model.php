<?php
    class bukutamu_model extends CI_Model
    {
        public function get_data()
        {
            $kueri = $this->db->get('bukutamu');
                
            return $kueri->result_array();
        }

        public function buat_tamu($data)
        {
            $this->db->insert('bukutamu', $data);
        }

        public function hapus_tamu($id)
        {
            $this->db->where('postid', $id);
            $this->db->delete('post');
            return $this->db->affected_rows();
        }

        public function update_tamu($id, $data)
        {
            $this->db->where('bukuid', $id);
            $this->db->update('post', $data);
        }
    }
    