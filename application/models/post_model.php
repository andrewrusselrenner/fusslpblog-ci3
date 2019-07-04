<?php
    class post_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_post($slug = FALSE)
        {
            if($slug === false)
            {
                // $this->db->order_by('tanggal', 'desc');
                $kueri = $this->db->get('post');
                
                return $kueri->result_array();
            }

            $kueri = $this->db->get_where('post', array('slug' => $slug));

            return $kueri->row_array();
        }

        public function create_post($data) {
            $this->db->insert('post', $data);
        }

        public function hapus_post($id)
        {
            $this->db->where('postid', $id);
            $this->db->delete('post');
            return true;
        }

        public function update_post($postdata)
        {
            $sluga = strtolower($this->input->post('judul'));
            $slug = url_title($sluga);

            $data = array(
                'judul' => $this->input->post('judul'),
                'slug' => $slug,
                'isi' => $this->input->post('isiartikel'),
                'kategori' => $this->input->post('kategori'),
                'author' => $this->session->userdata('name'),
                'GbrHeader' => $postdata['filegbr']
            );

            $id = $this->input->post('postid');

            $this->db->where('postid', $id);
            $this->db->update('post', $data);
        }

        public function getpostbyname()
        {
            $nama   = $this->session->userdata('name');
            $kueri = $this->db->get_where('post', array('author' => $nama));
                
            return $kueri->result_array();   
        }

        public function caridb($katakunci)
        {
            $kueri = $this->db->query('SELECT * FROM post WHERE (`Judul` LIKE "%'.$katakunci.'%") OR (`Isi`LIKE "%'.$katakunci.'%")');
            return $kueri->result_array();
        }
    }
    