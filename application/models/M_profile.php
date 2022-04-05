<?php
    class M_profile extends CI_Model {
        public function tampil_data(){
            return $this->db->get('tabel_profile');
        }
        function get_data_by_id($id_siswa){
            $this->load->model('M_profile');
            return $this->db->get('tabel_profile');
        }
    }
?>