<?php
    class M_siswa extends CI_Model {
        public function tampil_siswa(){
            return $this->db->get('tabel_siswa');
        }
    }
?>